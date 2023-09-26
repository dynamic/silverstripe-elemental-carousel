<?php

namespace Dynamic\Elements\Carousel\Elements;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\CompositeField;
use SilverStripe\ORM\FieldType\DBField;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Versioned\GridFieldArchiveAction;
use Dynamic\Carousel\Extension\CarouselPageExtension;
use SilverStripe\Forms\GridField\GridFieldDeleteAction;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;
use Symbiote\GridFieldExtensions\GridFieldAddExistingSearchButton;
use SilverStripe\Forms\GridField\GridFieldAddExistingAutocompleter;

/**
 * Class \Dynamic\Elements\Carousel\Elements\ElementCarousel
 *
 * @property string $Controls
 * @property string $Indicators
 * @property string $Transitions
 * @property string $Autoplay
 * @property int $Interval
 * @property string $Content
 * @method ManyManyList|Slide[] Slides()
 * @mixin CarouselPageExtension
 */
class ElementCarousel extends BaseElement
{
/**
     * @var string
     */
    private static $table_name = 'ElementCarousel';

    /**
     * @var array
     */
    private static $db = [
        'Content' => 'HTMLText',
    ];

    private static $extensions = [
        CarouselPageExtension::class,
    ];

    private static $inline_editable = false;

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $this->beforeUpdateCMSFields(function (FieldList $fields) {
            $fields->removeByName('Controls');
            $fields->removeByName('Indicators');
            $fields->removeByName('Transitions');
            $fields->removeByName('Autoplay');
            $fields->removeByName('Interval');

            $fields->dataFieldByName('Content')
                ->setRows(5);
        });

        $fields = parent::getCMSFields();

        if ($this->ID) {
            /** @var \SilverStripe\Forms\GridField\GridField $slideField */
            $slideField = $fields->dataFieldByName('Slides');
            $fields->removeByName('Slides');
            $fields->removeByName('Carousel');

            $fields->addFieldsToTab('Root.Main', array(
                $slideField,
            ));

            $fields->addFieldsToTab(
                'Root.Settings',
                [
                    CompositeField::create(
                        $this->getCarouselSettings(),
                    )
                        ->setTitle('Carousel Settings')
                        ->setName('CarouselSettings'),
                ]
            );
        }

        return $fields;
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
        if ($this->Slides()->count() == 1) {
            $label = ' slide';
        } else {
            $label = ' slides';
        }
        return DBField::create_field('HTMLText', $this->Slides()->count() . $label)->Summary(20);
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Carousel');
    }
}
