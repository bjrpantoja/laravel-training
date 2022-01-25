<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct() {
		$data = [ 'page' => 'Student Information' ];
		View::share('data', $data);
	}

    public function enrolledSubjects() {
        $view_title     = 'Subjects';
        $subjects = [
            [
                'sub_id'    => 1,
                'sub_name'  => 'Technopreneruship',
                'sub_code'  => 'MIT093',
                'sub_day'   => 'Saturday',
                'sub_time'  => '3:00-6:00 PM',
                'sub_room'  => 'M123',
                'sub_prof'  => 'Dr. Rommel Garma'
            ],
            [
                'sub_id'    => 2,
                'sub_name'  => 'Strategic Leadership and Management',
                'sub_code'  => 'MAS053A',
                'sub_day'   => 'Saturday',
                'sub_time'  => '9:00 AM -12:00 PM',
                'sub_room'  => 'L104',
                'sub_prof'  => 'Dr. Ena Bernal'
            ],
            [
                'sub_id'    => 3,
                'sub_name'  => 'Enterprise Systems Management',
                'sub_code'  => 'MIT033',
                'sub_day'   => 'Saturday',
                'sub_time'  => '12:00-3:00 PM',
                'sub_room'  => 'M124',
                'sub_prof'  => 'Dr. Neil Balba'
            ],
        ];
        
        return view('student.subjects', compact('subjects', 'view_title'));
    }

    public function myProfile() {
        $view_title         = 'Student Profile';
        $stud_det = [
                's_id'          => 1,
                's_fname'       => 'Seph',
                's_mname'       => 'Yñiguez',
                's_lname'       => 'Reyes',
                's_number'      => '4190001',
                's_prof_pic'    => 'uploads/no-photo.png',
                's_course'      => 'BS Information Technology',
                's_birthdate'   => 'January 1, 1995',
                's_address'     => 'Laguna',
                's_contact'     => '049-123-1234'

        ];

        // $stud_det = [
        //     [
        //         's_id'          => 1,
        //         's_fname'       => 'Seph',
        //         's_mname'       => 'Yñiguez',
        //         's_lname'       => 'Reyes',
        //         's_number'      => '4190001',
        //         's_prof_pic'    => 'uploads/no-photo.png',
        //         's_course'      => 'BS Information Technology',
        //         's_birthdate'   => 'January 1, 1995',
        //         's_address'     => 'Laguna',
        //         's_contact'     => '049-123-1234'
        //     ],
        //     [
        //         's_id'          => 2,
        //         's_fname'       => 'Det',
        //         's_mname'       => 'Yñiguez',
        //         's_lname'       => 'Reyes',
        //         's_number'      => '4190002',
        //         's_prof_pic'    => 'uploads/no-photo.png',
        //         's_course'      => 'BS Information Technology',
        //         's_birthdate'   => 'January 2, 1995',
        //         's_address'     => 'Laguna',
        //         's_contact'     => '049-123-1235'
        //     ],
            
        // ];

        return view('student.students', compact('stud_det', 'view_title'));
    }

    public function grades() {
        $view_title = 'Student Grades';
        $grades     = [
            [
                'sub_name'  => 'Technopreneurship',
                'sub_code'  => 'MIT093',
                'g_midterm' => '90',
                'g_final'   => '95'
            ],
            [
                'sub_name'  => 'Strategic Leadership and Management',
                'sub_code'  => 'MAS053A',
                'g_midterm' => '89',
                'g_final'   => '97'
            ],
            [
                'sub_name'  => 'Enterprise Systems Management',
                'sub_code'  => 'MIT033',
                'g_midterm' => '93',
                'g_final'   => '92'
            ],
        ];

        return view('student.grades', compact('grades', 'view_title'));
    }
}
