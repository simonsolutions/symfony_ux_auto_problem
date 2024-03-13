<?php

declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class AutoDemoType extends AbstractType
{
    public function __construct(protected TranslatorInterface $translator)
    {}

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $demoItemsGrouped = [
            'Group 1' => [
                'Item 1.1' => 'item_1_1',
                'Item 1.2' => 'item_1_2',
                'Item 1.3' => 'item_1_3',
            ],
            'Group 2' => [
                'Item 2.1' => 'item_2_1',
                'Item 2.2' => 'item_2_2',
                'Item 2.3' => 'item_2_3',
            ],
            'Group 3' => [
                'Item 3.1' => 'item_3_1',
                'Item 3.2' => 'item_3_2',
                'Item 3.3' => 'item_3_3',
            ],
        ];
        $demoItemsPlain = [
            'Item 1.1' => 'item_1_1',
            'Item 1.2' => 'item_1_2',
            'Item 1.3' => 'item_1_3',
            'Item 2.1' => 'item_2_1',
            'Item 2.2' => 'item_2_2',
            'Item 2.3' => 'item_2_3',
            'Item 3.1' => 'item_3_1',
            'Item 3.2' => 'item_3_2',
            'Item 3.3' => 'item_3_3',
        ];

        $builder->add('UxSingleGrouped', ChoiceType::class, [
            'label' => 'UX Autocomplete SingleSelect Grouped',
            'placeholder' => 'Please choose',
            'required' => false,
            'choices'  => $demoItemsGrouped,
            'expanded' => false,
            'multiple' => false,
            'autocomplete' => true,
            'translation_domain' => false,
        ]);
        $builder->add('UxMultiple', ChoiceType::class, [
            'label' => 'UX Autocomplete MultiSelect Grouped',
            'placeholder' => 'Please choose',
            'required' => false,
            'choices'  => $demoItemsGrouped,
            'expanded' => false,
            'multiple' => true,
            'autocomplete' => true,
            'translation_domain' => false,
        ]);
        $builder->add('UxSinglePlain', ChoiceType::class, [
            'label' => 'UX Autocomplete SingleSelect Plain',
            'placeholder' => 'Please choose',
            'required' => false,
            'choices'  => $demoItemsPlain,
            'expanded' => false,
            'multiple' => false,
            'autocomplete' => true,
            'translation_domain' => false,
        ]);
    }

}
