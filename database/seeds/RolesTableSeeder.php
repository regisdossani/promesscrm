<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

    // create a superadmin role for the admin users
    $role = Role::create(['guard_name' => 'web','name' => 'superadmin']);
    $role->givePermissionTo(Permission::all());

    Role::create([
        'guard_name' => 'web', 'name' => 'Directeur-PROMESS'
        ]);


        $rfp=Role::create([
            'guard_name' => 'web','name' => 'Resp-Fond-PVSYST'
        ]);
/*
        $rfp->givePermissionTo(
'gestion-profil'
        ); */





        $rAccEd=Role::create([
            'guard_name' => 'web','name' => 'Responsable-AccEd'
        ]);


//Responsable ULDLR
       $uldlr= Role::create([

            'guard_name' => 'web', 'name' => 'Resp-ULDLR'
        ]);

    Role::create([
            'guard_name' => 'web', 'name' => 'RAF'
        ]);

        Role::create([
            'guard_name' => 'web', 'name' => 'CP'
        ]);
        Role::create([
            'guard_name' => 'web', 'name' => 'Menage'
        ]);
        Role::create([
            'guard_name' => 'web', 'name' => 'Gardien'
        ]);
        Role::create([
            'guard_name' => 'web', 'name' => 'RFL'
        ]);





 //Responsable Administrative et Comptable


     $rac=   Role::create([

            'guard_name' => 'web',   'name' => 'Resp-Admin-Comptable'
        ]);



$rac->givePermissionTo(
    'gestion-chantier',
    'creer-suivi-horaire-formateur',
    'modifier-suivi-horaire-formateur',
    'creer-suivi-horaire-equipe',
    'modifier-suivi-horaire-equipe',

    'modifier-contrat-prestataire',
    'creer-contrat-prestataire',

    'modifier-contrat-chantier',
    'creer-contrat-chantier',

    'gestion-test-entree',
    'chantier-modifier',
    'stage-modifier',
    'modifier-formation-formateurs',
    'modifier-stock-pedagogique',
    'modifier-stock-apprenant-postformation'
);






 //Responsable Pédagogique
       $rp= Role::create([

            'guard_name' => 'web',  'name' => 'Resp-Pedagogique'
        ]);

$rp->givePermissionTo('list-apprenant-postformation',
                     'voir-animation-reseau',
                        'voir-fiche-contact-persressource',
                        'voir-fichepartenariat',
                        'voir-suivi-echange',
                        'chantier-lister',


                        'gestion-candidats',
                        'gestion-test-entree',
                        'gestion-apprenants',
                        'gestion-attendances-apprenant',
                        'gestion-notes-apprenant',
                        'gestion-stages',
                        'gestion-planaffectation-formateur',
                        'gestion-formateurs',
                        'gestion-referentiel',
                       'gestion-stock-equipement-pedagogique',

                    );



        //Responsable relation extérieure

        $rre=Role::create([

            'guard_name' => 'web', 'name' => 'Resp-Relation-Ext',
        ]);

        $rre->givePermissionTo(
            'modifier-apprenant-postformation',
             'supprimer-apprenant-postformation',
             'creer-apprenant-postformation',

            'gestion-animation-reseau',
            /* 'supprimer-animation-reseau',
            'creer-animation-reseau', */

            'creer-fichepartenariat',
            'modifier-fichepartenariat',
            'supprimer-fichepartenariat',

            'creer-echange-partenariat',
            'modifier-echange-partenariat',
            'supprimer-echange-partenariat',

            'stage-creer',
            'stage-modifier',
            'stage-supprimer',



            'gestion-stock',
                'voir-fiche-contact-persressource',
                'voir-echange-persressource',

        );

//Responsable Apprenant Candidat
        Role::create([
            'guard_name' => 'web', 'name' => 'Apprenant-Candidat'
        ]);

        Role::create([
            'guard_name' => 'web', 'name' => 'Formateur',
        ]);

        Role::create([
            'guard_name' => 'web','name' => 'Apprenant'
        ]);

        /*  $roles =[
                      'name' => 'superadmin',
                      'name' =>  'Directeur PROMESS',
                      'name' =>'Responsable Fond PVSYST',
                      'name' =>'Responsable AccEd',
                      'name' =>'Responsable ULDLR',

                      'name' =>'Responsable Administrative et Comptable',
                      'name' =>'Responsable Pédagogique',
                      'name' =>'Responsable Relations Extérieures',
                      'name' =>'Apprenants candidats',
                      'name' =>'Formateurs',
                      'name' =>'Apprenant',

                ];
 */
// create roles and assign existing permissions



              /*   foreach ($roles as $role) {
                    Role::create([$role]);
               } */
    }

}
