<?php

namespace App\Form;

use App\Entity\Tirage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TirageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annee_numero_de_tirage')
            ->add('jour_de_tirage')
            ->add('date_de_tirage')
            ->add('date_de_forclusion')
            ->add('boule_1')
            ->add('boule_2')
            ->add('boule_3')
            ->add('boule_4')
            ->add('boule_5')
            ->add('numero_chance')
            ->add('combinaison_gagnante_en_ordre_croissant')
            ->add('nombre_de_gagnant_au_rang1')
            ->add('rapport_du_rang1')
            ->add('nombre_de_gagnant_au_rang2')
            ->add('rapport_du_rang2')
            ->add('nombre_de_gagnant_au_rang3')
            ->add('rapport_du_rang3')
            ->add('nombre_de_gagnant_au_rang4')
            ->add('rapport_du_rang4')
            ->add('nombre_de_gagnant_au_rang5')
            ->add('rapport_du_rang5')
            ->add('nombre_de_gagnant_au_rang6')
            ->add('rapport_du_rang6')
            ->add('nombre_de_gagnant_au_rang7')
            ->add('rapport_du_rang7')
            ->add('nombre_de_gagnant_au_rang8')
            ->add('rapport_du_rang8')
            ->add('nombre_de_gagnant_au_rang9')
            ->add('rapport_du_rang9')
            ->add('nombre_de_codes_gagnants')
            ->add('rapport_codes_gagnants')
            ->add('codes_gagnants')
            ->add('boule_1_second_tirage')
            ->add('boule_2_second_tirage')
            ->add('boule_3_second_tirage')
            ->add('boule_4_second_tirage')
            ->add('boule_5_second_tirage')
            ->add('combinaison_gagnant_second_tirage_en_ordre_croissant')
            ->add('nombre_de_gagnant_au_rang_1_second_tirage')
            ->add('rapport_du_rang1_second_tirage')
            ->add('nombre_de_gagnant_au_rang_2_second_tirage')
            ->add('rapport_du_rang2_second_tirage')
            ->add('nombre_de_gagnant_au_rang_3_second_tirage')
            ->add('rapport_du_rang3_second_tirage')
            ->add('nombre_de_gagnant_au_rang_4_second_tirage')
            ->add('rapport_du_rang4_second_tirage')
            ->add('numero_jokerplus')
            ->add('devise')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tirage::class,
        ]);
    }
}
