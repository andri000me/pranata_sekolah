<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'AppController';
$route['404_override'] = 'AppController/pageNotFound';
$route['translate_uri_dashes'] = false;

//admin routes
$route['admin'] = 'AppController';

/* home routes */
//@view
$route['admin/dashboard'] = "HomeController/dashboard";

/* auth routes */
//@view
$route['login'] = 'AuthController/login';
$route['forgot-password'] = 'AuthController/forgotPassword';
$route['reset-password/(:any)'] = 'AuthController/resetPassword/$1';
//@action
$route['auth/login'] = 'AuthController/authLogin';
$route['auth/send-link-forgot'] = 'AuthController/sendLinkForgot';
$route['auth/reset/(:any)'] = 'AuthController/reset/$1';
$route['logout'] = 'AppController/logout';

/* users routes */
//@view
$route['admin/users/(:num)'] = 'UsersController/users/$1';
$route['admin/users-table/(:num)'] = 'UsersController/usersTable/$1';
$route['admin/users/create/(:num)'] = 'UsersController/create/$1';
$route['admin/users/(:num)/edit'] = 'UsersController/edit/$1';
//@action
$route['admin/users/add'] = 'UsersController/add';
$route['admin/users/(:num)/update'] = 'UsersController/update/$1';
$route['admin/users/(:num)/delete'] = 'UsersController/delete/$1';

/* teachers routes */
//@view
$route['admin/teachers'] = 'master/TeacherController/teachers';
$route['admin/teachers-table'] = 'master/TeacherController/teachersTable';
$route['admin/teachers/create'] = 'master/TeacherController/create';
$route['admin/teachers/(:num)/edit'] = 'master/TeacherController/edit/$1';
//@action
$route['admin/teachers/add'] = 'master/TeacherController/add';
$route['admin/teachers/(:num)/update'] = 'master/TeacherController/update/$1';
$route['admin/teachers/(:num)/delete'] = 'master/TeacherController/delete/$1';

/* students routes */
//@view
$route['admin/students'] = 'master/StudentController/students';
$route['admin/students-table'] = 'master/StudentController/studentsTable';
$route['admin/students/create'] = 'master/StudentController/create';
$route['admin/students/(:num)/edit'] = 'master/StudentController/edit/$1';
//@action
$route['admin/students/add'] = 'master/StudentController/add';
$route['admin/students/(:num)/update'] = 'master/StudentController/update/$1';
$route['admin/students/(:num)/delete'] = 'master/StudentController/delete/$1';

/* classes routes */
//@view
$route['admin/class'] = 'master/ClassesController/classes';
$route['admin/class-table'] = 'master/ClassesController/classesTable';
$route['admin/class/create'] = 'master/ClassesController/create';
$route['admin/class/(:num)/edit'] = 'master/ClassesController/edit/$1';
//@action
$route['admin/class/add'] = 'master/ClassesController/add';
$route['admin/class/(:num)/update'] = 'master/ClassesController/update/$1';
$route['admin/class/(:num)/delete'] = 'master/ClassesController/delete/$1';

/* semesters routes */
//@view
$route['admin/semesters'] = 'master/SemesterController/semesters';
$route['admin/semesters-table'] = 'master/SemesterController/semestersTable';
$route['admin/semesters/create'] = 'master/SemesterController/create';
$route['admin/semesters/(:num)/edit'] = 'master/SemesterController/edit/$1';
//@action
$route['admin/semesters/add'] = 'master/SemesterController/add';
$route['admin/semesters/(:num)/update'] = 'master/SemesterController/update/$1';
$route['admin/semesters/(:num)/delete'] = 'master/SemesterController/delete/$1';

/* subjects routes */
//@view
$route['admin/subjects'] = 'master/SubjectController/subjects';
$route['admin/subjects-table'] = 'master/SubjectController/subjectsTable';
$route['admin/subjects/create'] = 'master/SubjectController/create';
$route['admin/subjects/(:num)/edit'] = 'master/SubjectController/edit/$1';
//@action
$route['admin/subjects/add'] = 'master/SubjectController/add';
$route['admin/subjects/(:num)/update'] = 'master/SubjectController/update/$1';
$route['admin/subjects/(:num)/delete'] = 'master/SubjectController/delete/$1';

/* roles routes */
//@view
$route['admin/roles'] = 'RolesController/roles';
$route['admin/roles-table'] = 'RolesController/rolesTable';
$route['admin/roles/(:num)/edit'] = 'RolesController/edit/$1';
//@action
$route['admin/roles/(:num)/update'] = 'RolesController/update/$1';

/* subclass routes */
//@view
$route['admin/subclass'] = 'relation/SubjectClass/subclass';
$route['admin/subclass/(:num)/edit'] = 'relation/SubjectClass/edit/$1';
$route['admin/subclass/(:num)/(:num)/check'] = 'relation/SubjectClass/checkClassSubjects/$1/$2';
$route['admin/subclass/(:num)/sublist'] = 'relation/SubjectClass/subclassList/$1';
//@action
$route['admin/subclass/add'] = 'relation/SubjectClass/addSubclass';
$route['admin/subclass/(:num)/delete'] = 'relation/SubjectClass/delete/$1';

/* subteachers routes */
//@view
$route['admin/subteachers'] = 'relation/SubjectTeacher/subteachers';
$route['admin/subteachers/(:num)/edit'] = 'relation/SubjectTeacher/edit/$1';
$route['admin/subteachers/(:num)/(:num)/(:num)/check'] = 'relation/SubjectTeacher/checkClassSubjects/$1/$2/$3';
$route['admin/subteachers/(:num)/sublist'] = 'relation/SubjectTeacher/subclassTeacers/$1';
//@action
$route['admin/subteachers/add'] = 'relation/SubjectTeacher/add/$1';

/* values routes */
//@view
$route['admin/values'] = 'relation/SubjectValue/values';
//@action
$route['admin/values/student-search/(:any)'] = 'relation/SubjectValue/studentSearch/$1';