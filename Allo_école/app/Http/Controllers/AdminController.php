<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class AdminController extends Controller
{
    
public function Profile()
{
    $totalCourses = Course::count();
    return view('Admin.profile', compact('totalCourses'));
}
private function getTotalPdfSize()
{
    $totalSize = 0;
    $courses = Course::whereNotNull('pdf_path')->get();
    foreach ($courses as $course) {
        $totalSize += Storage::size($course->pdf_path);
    }
    return $totalSize;
}
private function getTotalVideoSize()
{
    $totalSize = 0;
    $courses = Course::whereNotNull('video_path')->get();
    foreach ($courses as $course) {
        $totalSize += Storage::size($course->video_path);
    }
    return $totalSize;
}

public function Courses()
{
    $totalPdfSize = $this->getTotalPdfSize();
    $totalVideoSize = $this->getTotalVideoSize();
    return view('Admin.Courses', compact('totalPdfSize', 'totalVideoSize'));
}

public function dashboard()
{
    $étudients = User::where('role', 'étudient')->get();
    $studentCount = User::where('role', 'étudient')->count();
    $studentsLastWeek = User::where('role', 'étudient')
                            ->where('created_at', '>=', Carbon::now()->subWeek())
                            ->count();

    if ($studentCount == 0) {
        $percentageLastWeek = 0;
    } elseif ($studentsLastWeek == $studentCount) {
        $percentageLastWeek = 100;
    } else {
        $percentageLastWeek = ($studentsLastWeek / $studentCount) * 100;
    };
    

    return view('Admin.dashboard', compact('étudients','studentCount', 'studentsLastWeek', 'percentageLastWeek'));
}
}
