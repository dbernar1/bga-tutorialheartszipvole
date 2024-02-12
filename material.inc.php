<?php
/**
 *------
 * BGA framework: Gregory Isabelli & Emmanuel Colin & BoardGameArena
 * TutorialHeartsZipvole implementation : © <Your name here> <Your email address here>
 *
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * TutorialHeartsZipvole game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

use AgingCards\DifficultAgingCards\Idiotic;
use AgingCards\DifficultAgingCards\Suicidal;
use AgingCards\DifficultAgingCards\VeryHungry;
use AgingCards\NormalAgingCards\Hungry;
use AgingCards\NormalAgingCards\Scared;
use AgingCards\NormalAgingCards\Stupid;
use AgingCards\NormalAgingCards\VeryStupid;
use AgingCards\NormalAgingCards\VeryTired;
use Cards\Hazard\HazardSides\Cannibals;
use Cards\Hazard\HazardSides\ExploringTheIsland;
use Cards\Hazard\HazardSides\FurtherExploringTheIsland;
use Cards\Hazard\HazardSides\WildAnimals;
use Cards\Hazard\HazardSides\WithTheRaftToTheWreck;
use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\KnowledgeSides\Books;
use Friday\Cards\Hazard\KnowledgeSides\Deception;
use Friday\Cards\Hazard\KnowledgeSides\Equipment;
use Friday\Cards\Hazard\KnowledgeSides\Experience;
use Friday\Cards\Hazard\KnowledgeSides\Food;
use Friday\Cards\Hazard\KnowledgeSides\Mimicry;
use Friday\Cards\Hazard\KnowledgeSides\Realization;
use Friday\Cards\Hazard\KnowledgeSides\Repeat;
use Friday\Cards\Hazard\KnowledgeSides\Strategy;
use Friday\Cards\Hazard\KnowledgeSides\Vision;
use Friday\Cards\Hazard\KnowledgeSides\Weapon;
use Friday\Cards\Pirate;
use Friday\Cards\Robinson\Distracted;
use Friday\Cards\Robinson\Eating;
use Friday\Cards\Robinson\Focused;
use Friday\Cards\Robinson\Genius;
use Friday\Cards\Robinson\Weak;

$this->pirateCards = [
    new Pirate(6, 20),
    new Pirate(7, 25),
    new Pirate(8, 30),
    new Pirate(9, 35),
    new Pirate(10, 40),
    //  TODO: Implement the more complicated pirate Cards
];

$this->robinsonCards = [
    new Focused(),
    new Focused(),
    new Focused(),
    new Genius(),
    new Eating(),
    new Distracted(),
    new Distracted(),
    new Distracted(),
    new Distracted(),
    new Distracted(),
    new Weak(),
    new Weak(),
    new Weak(),
    new Weak(),
    new Weak(),
    new Weak(),
    new Weak(),
    new Weak(),
];

$this->normalAgingCards = [
    new Scared(),
    new Scared(),
    new VeryTired(),
    new Hungry(),
    new \AgingCards\NormalAgingCards\Distracted(),
    new Stupid(),
    new Stupid(),
    new VeryStupid(),
];

$this->difficultAgingCards = [
    new VeryHungry(),
    new Idiotic(),
    new Suicidal(),
];

$this->hazardCards = [
    new Hazard(new WithTheRaftToTheWreck(), new Strategy(0, 2)),
    new Hazard(new WithTheRaftToTheWreck(), new Strategy(0, 2)),
    new Hazard(new WithTheRaftToTheWreck(), new Equipment()),
    new Hazard(new WithTheRaftToTheWreck(), new Equipment()),
    new Hazard(new WithTheRaftToTheWreck(), new Food(0)),
    new Hazard(new WithTheRaftToTheWreck(), new Food(0)),
    new Hazard(new WithTheRaftToTheWreck(), new Mimicry(0)),
    new Hazard(new WithTheRaftToTheWreck(), new Realization(0)),
    new Hazard(new WithTheRaftToTheWreck(), new Deception(0)),
    new Hazard(new WithTheRaftToTheWreck(), new Books()),

    new Hazard(new ExploringTheIsland(), new Weapon(2)),
    new Hazard(new ExploringTheIsland(), new Weapon(2)),
    new Hazard(new ExploringTheIsland(), new Food(1)),
    new Hazard(new ExploringTheIsland(), new Food(1)),
    new Hazard(new ExploringTheIsland(), new Deception(1)),
    new Hazard(new ExploringTheIsland(), new Repeat(1)),
    new Hazard(new ExploringTheIsland(), new Realization(1)),
    new Hazard(new ExploringTheIsland(), new Mimicry(1)),

    new Hazard(new FurtherExploringTheIsland(), new Repeat(2)),
    new Hazard(new FurtherExploringTheIsland(), new Food(2)),
    new Hazard(new FurtherExploringTheIsland(), new Strategy(2, 1)),
    new Hazard(new FurtherExploringTheIsland(), new Vision(2)),
    new Hazard(new FurtherExploringTheIsland(), new Realization(2)),
    new Hazard(new FurtherExploringTheIsland(), new Experience(2)),

    new Hazard(new WildAnimals(), new Vision(3)),
    new Hazard(new WildAnimals(), new Experience(3)),
    new Hazard(new WildAnimals(), new Realization(3)),
    new Hazard(new WildAnimals(), new Strategy(3, 1)),

    new Hazard(new Cannibals(), new Weapon(4)),
    new Hazard(new Cannibals(), new Weapon(4)),
];




