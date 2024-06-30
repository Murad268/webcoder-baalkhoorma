<?php namespace Murad\Contactform\Components;

use App;
use Cms\Classes\ComponentBase;
use Flash;
use Murad\Contactform\Models\ContactForm;
use Input;
use Lang;
use Murad\Settings\Models\Settings;
use Murad\Translatecontactformmessages\Models\TranslateContactFormMessages;

/**
 * FeedBack Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class FeedBack extends ComponentBase
{

    public function onRun() {
        $settings = Settings::first();
        $this->page['settings'] = $settings;
    }

    public function componentDetails()
    {
        return [
            'name' => 'Contact Form',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onFeedBack()
    {
        $messaggess = TranslateContactFormMessages::first();
        $data = Input::all();
        $feedBack = new ContactForm();
        $feedBack->fill($data);
        $feedBack->save();
        $locale = App::getLocale();
        $modalBody = Lang::get('murad.contactform::' . $locale . '.lang.plugin.name');

        return [
            '#modal_body' => $messaggess->success_message,
            '#modal_thanks' => $messaggess->success_title,
            '#form_feed' => '<script>
                modalOpenHandler()
            </script>'
        ];
    }
}
