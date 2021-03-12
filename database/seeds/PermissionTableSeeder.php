<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $permissions = [
            'role-creer',
            'role-modifier',
            'role-supprimer',

            'list-apprenant-postformation',
            'apprenant-lister',
           'apprenant-creer',
           'apprenant-modifier',
           'apprenant-supprimer',
           'gestion-apprenants',

           'gestion-planaffectation-formateur',
           'gestion-referentiel',
           'gestion-attendances-apprenant',
           'gestion-test-entrée',
           'gestion-stock-equipement-pedagogique',
           'gestion-stock-equipement-postapprenant',
           'gestion-notes-apprenant',

           'voir-fiche-contact-persressource',
           'voir-fichepartenariat',
           'voir-suivi-echange',
           'voir-apprenant-postformation',
           'voir-animation-reseau',

           'voir-echange-persressource',
           'creer-echange-partenariat',
           'modifier-echange-partenariat',
           'supprimer-echange-partenariat',

           'voir-candidat',
            'candidat-lister',
            'candidat-creer',
            'candidat-modifier',
            'candidat-supprimer',
            'gestion-candidats',

            'voir-formateur',
            'formateur-lister',
            'formateur-creer',
            'formateur-modifier',
            'formateur-supprimer',
            'gestion-formateurs',

            'professionnel-lister',
            'professionnel-creer',
            'professionnel-modifier',
            'professionnel-supprimer',

            'voir-stage',
            'stage-lister',
            'stage-creer',
            'stage-modifier',
            'stage-supprimer',
            'gestion-stages',


                'persressource-lister',
            'persressource-creer',
            'persressource-modifier',
            'persressource-supprimer',

          'equipe-lister',
           'equipe-creer',
           'equipe-modifier',
           'equipe-supprimer',

            'chantier-lister',
            'chantier-creer',
            'chantier-modifier',
            'chantier-supprimer',
            'voir-chantier',
            'gestion-chantier',
            'formation-lister',
            'formation-creer',
            'formation-modifier',
            'formation-supprimer',

            'typeformation-lister',
            'typeformation-creer',
            'typeformation-modifier',
            'typeformation-supprimer',

            'client-lister',
            'client-creer',
            'client-modifier',
            'client-supprimer',

            'parten-lister',
            'parten-creer',
            'parten-modifier',
            'parten-supprimer',

            'admin-lister',
            'admin-creer',
            'admin-modifier',
            'admin-supprimer',

            'type-lister',
            'type-creer',
            'type-modifier',
            'type-supprimer',

            'modifier-apprenant-postformation',
            'supprimer-apprenant-postformation',
            'creer-apprenant-postformation',
            'gestion-apprenant-postformation',

           'modifier-animation-reseau',
           'supprimer-animation-reseau',
           'creer-animation-reseau',
           'gestion-animation-reseau',
           'creer-fichepartenariat',
           'modifier-fichepartenariat',
           'supprimer-fichepartenariat',

           'creer-fichechantier',
           'modifier-fichechantier',
           'supprimer-fichechantier',

           'creer-fichestage',
           'modifier-fichestage',
           'supprimer-fichestage',
           'gestion-stock',
           'gestion-test-entree',


           'creer-suivi-horaire-formateur',
    'modifier-suivi-horaire-formateur',
    'creer-suivi-horaire-equipe',
    'modifier-suivi-horaire-equipe',


    'modifier-contrat-prestataire',
    'creer-contrat-prestataire',

    'modifier-contrat-chantier',
    'creer-contrat-chantier',

    'modifier-formation-formateurs',
    'modifier-stock-pedagogique',
    'modifier-stock-apprenant-postformation'
         ];


         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
    }
}

}
