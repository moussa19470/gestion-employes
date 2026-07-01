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


  function isExistDepartement(array $departements,  $departement ): bool {
      foreach ($departements as $depart) {
         if($depart['code'] === $departement['code']) {
                return true; 
            }
        }
                return false; 
  }

  function tableauDepartements(array $employes): array {
        $departements = [];
        foreach ($employes as  $employe) {
          foreach ($employe["departements"] as $departement) {
                     if (!isExistDepartement($departements,$departement)) {
                          $departements[] = $departement;
                     }
              }
          }
       return $departements;
  }

 $employes = initialisationEmployes();
 $tableauDpart = tableauDepartements($employes);

  var_dump($tableauDpart);














?>