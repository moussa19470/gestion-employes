<?php

 function initialisationEmployes(): array {
    
      $employes = [
         0 => [
            "nom" => "Moussa BA",
            "matricule" => "MOO1",
            "departements" => [
                0 => ["nom" => "depart1" , "code" => "C001"],
                1 =>["nom" => "depart2" , "code" => "C002"],
            ],
            "subordonnes" => [1]
         ],
         1 => [
            "nom" => "Matar BA",
            "matricule" => "MOO2",
            "departements" => [
                0 =>["nom" => "depart3" , "code" => "C001"],
                1 => ["nom" => "depart2" , "code" => "C002"],
            ],
            "subordonnes" => [2]
         ],
         2 => [
            "nom" => "Fatou BA",
            "matricule" => "MOO3",
            "departements" => [
                ["nom" => "depart3" , "code" => "C003"] 
            ],
            "subordonnes" => []
         ]                 
      ];
      return $employes;
  }













?>