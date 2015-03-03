<?php // src/GoldenBundle/Form/Type/ContactType
namespace GoldenBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
            ->add('task')
            ->add('dueDate', null, array('mapped' => false))
            ->add('save', 'submit');
	}

	 public function getName()
    {
        return 'task'; //unique name of the form
    }
}
?>
