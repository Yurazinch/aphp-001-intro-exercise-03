<?php

declare(strict_types=1);

namespace Human;

class Student 
{
    public $name, $surname, $age, $faculty, $course, $is_student;  

    public function __construct(string $name, string $surname, int $age, string $faculty, int $course, bool $is_student) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->faculty = $faculty;
        $this->course = $course;
        $this->is_student = $is_student;
    }

    const COURSE = 5;
    
    private function setStudent() {        
        $this->is_student = false;
        $this->finished();
    }

    public function incrementAge(): void {
        $this->age += 1;
        $this->ageChanged();
    }

    public function incrementCourse(): void {
        $this->course += 1;
        if( $this->course > Student::COURSE ) {
            $this->setStudent();
        } else {
            $this->courseChanged();
        }        
    }

    public function changeFaculty(string $newFaculty): void {
        if($this->is_student) {
            $this->faculty = $newFaculty;
            $this->facultyChanged();
        } else {
            echo 'Студент закончил обучение'."\n";
        }
    }

    public function ageChanged(): void {
        echo "Возраст изменен на $this->age"."\n";
    }

    public function courseChanged(): void {
        echo "Перевод на $this->course курс"."\n";
    }

    public function facultyChanged(): void {        
        echo "Перевод на факультет $this->faculty"."\n"; 
    }

    public function finished(): void {
        echo "Обучение завершено"."\n";
    }

}
