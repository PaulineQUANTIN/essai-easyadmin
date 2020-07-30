<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Project;
use App\Entity\SchoolYear;
use App\Entity\Student; 
use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 5; $i++) {
            $project = new Project();
            $project->setName('project '.$i);
            $project->setDescription('lorem ipsum');
            $manager->persist($project);
        }

        $manager->flush();

        for ($i = 1; $i < 5; $i++) {
            $schoolyear = new SchoolYear();
            $schoolyear->setName('schoolyear '.$i);
            $schoolyear->setStartDate(new DateTime());
            $schoolyear->setDateEnd(new DateTime());
            $manager->persist($schoolyear);
        }

        $manager->flush();

        for ($i = 1; $i < 5; $i++) {
            $student = new Student();
            $student->setFirstname('student '.$i);
            $student->setLastname('student '.$i);
            $student->setEmail('sdqdqsdqd@sdqsdsd.de');
            $student->setBirthyear(1984);
            $student->setSchoolYear(null);
            $manager->persist($student);
        }

        $manager->flush();

        for ($i = 1; $i < 5; $i++) {
            $tag = new Tag();
            $tag->setName('tag '.$i);
            $tag->setDescription('lorem ipsum');
            $manager->persist($tag);
        }

        $manager->flush();
    }
}
