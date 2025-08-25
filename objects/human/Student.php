<?php

declare(strict_types=1);

namespace human\Student;

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

    static $COURSE = 5;
    
    private function setStydent() {
        if( $this->course > $COURSE ) { 
        $this->is_student = false;
        $this->finished();        
        }
    }

    private function incrementAge(): void {
        $this->age += 1;
        $this->ageChanged();
    }

    private function incrementCourse(): void {
        $this->course += 1;
        $this->courseChanged();
    }

    private function changeFaculty(int $newFaculty): void {
        $this->faculty = $newFaculty;
        $this->facultyChanged();
    }

    private function ageChanged(): void {
        echo "Возраст изменен на $this->age";
    }

    private function courseChanged(): void {
        echo "Перевод на $this->course курс";
    }

    private function facultyChanged(): void {
        echo "Перевод на факультет $this->faculty";        
    }

    private function finished(): void {
        echo "Обучение закончено";
    }

}

?>