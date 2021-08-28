<?php

namespace App\Controller\Admin;

use App\Entity\Trajet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class TrajetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Trajet::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('depart'),
            TextField::new('destination'),
            TimeField::new('heurDep' , 'Heure de départ'),
            MoneyField::new('prix')->setCurrency('XOF')
        ];
    }
    
}
