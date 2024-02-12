<?php

use Friday\Cards\Aging\Difficult\Idiotic;
use Friday\Cards\Aging\Difficult\Suicidal;
use Friday\Cards\Aging\Difficult\VeryHungry;
use Friday\Cards\Aging\DifficultAging;
use Friday\Cards\Aging\Normal\Hungry;
use Friday\Cards\Aging\Normal\Scared;
use Friday\Cards\Aging\Normal\Stupid;
use Friday\Cards\Aging\Normal\VeryStupid;
use Friday\Cards\Aging\Normal\VeryTired;
use Friday\Cards\Aging\NormalAging;
use Friday\Cards\Hazard\Cannibals\EncounterCannibalsToAcquireWeapon;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToAcquireFood;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToAcquireWeapon;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnDeception;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnMimicry;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnRealization;
use Friday\Cards\Hazard\ExploringTheIsland\ExploringTheIslandToLearnRepeat;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToAcquireFood;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToGainExperience;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnRealization;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnRepeat;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnStrategy;
use Friday\Cards\Hazard\FurtherExploringTheIsland\FurtherExploringTheIslandToLearnVision;
use Friday\Cards\Hazard\Hazard;
use Friday\Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnExperience;
use Friday\Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnRealization;
use Friday\Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnStrategy;
use Friday\Cards\Hazard\WildAnimals\EncounterWildAnimalsToLearnVision;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireBooks;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireEquipment;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToAcquireFood;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToDevelopStrategy;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnDeception;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnMimicry;
use Friday\Cards\Hazard\WithTheRaftToTheWreck\WithTheRaftToTheWreckToLearnRealization;
use Friday\Cards\Robinson\Distracted;
use Friday\Cards\Robinson\Eating;
use Friday\Cards\Robinson\Focused;
use Friday\Cards\Robinson\Genius;
use Friday\Cards\Robinson\Robinson;
use Friday\Cards\Robinson\Weak;

return [
    Robinson::CARD_TYPE => [
        new Distracted(),
        new Weak(),
        new Focused(),
        new Genius(),
        new Eating(),
    ],

    NormalAging::CARD_TYPE => [
        new \Friday\Cards\Aging\Normal\Distracted(),
        new Scared(),
        new VeryTired(),
        new Hungry(),
        new Stupid(),
        new VeryStupid(),
    ],

    DifficultAging::CARD_TYPE => [
        new VeryHungry(),
        new Idiotic(),
        new Suicidal(),
    ],

    Hazard::CARD_TYPE => [
        new WithTheRaftToTheWreckToDevelopStrategy(),
        new WithTheRaftToTheWreckToAcquireEquipment(),
        new WithTheRaftToTheWreckToAcquireFood(),
        new WithTheRaftToTheWreckToLearnMimicry(),
        new WithTheRaftToTheWreckToLearnRealization(),
        new WithTheRaftToTheWreckToLearnDeception(),
        new WithTheRaftToTheWreckToAcquireBooks(),

        new ExploringTheIslandToAcquireWeapon(),
        new ExploringTheIslandToAcquireFood(),
        new ExploringTheIslandToLearnDeception(),
        new ExploringTheIslandToLearnRepeat(),
        new ExploringTheIslandToLearnRealization(),
        new ExploringTheIslandToLearnMimicry(),

        new FurtherExploringTheIslandToLearnRepeat(),
        new FurtherExploringTheIslandToAcquireFood(),
        new FurtherExploringTheIslandToLearnStrategy(),
        new FurtherExploringTheIslandToLearnVision(),
        new FurtherExploringTheIslandToLearnRealization(),
        new FurtherExploringTheIslandToGainExperience(),

        new EncounterWildAnimalsToLearnVision(),
        new EncounterWildAnimalsToLearnExperience(),
        new EncounterWildAnimalsToLearnRealization(),
        new EncounterWildAnimalsToLearnStrategy(),

        new EncounterCannibalsToAcquireWeapon(),
    ],
];