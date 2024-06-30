<?php namespace Murad\Certificatesanddiplomas\Components;
use Murad\Internalprivacypolicy\Models\InternalPrivacyPolicy;
use Cms\Classes\ComponentBase;
use Murad\Certificatesanddiplomas\Models\CertificatesAndDiplomas as ModelsCertificatesAndDiplomas;
use Murad\Settings\Models\Settings;
/**
 * CertificatesAndDiplomas Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class CertificatesAndDiplomas extends ComponentBase
{
    public function onRun()
    {
        $certificates = ModelsCertificatesAndDiplomas::all();
        $certificatesPol = InternalPrivacyPolicy::all();
        $internal_quality_policy_text = Settings::first()->internal_quality_policy_text;
       
        $this->page['certificates'] = $certificates;
        $this->page['internal_quality_policy_text'] = $internal_quality_policy_text;
        $this->page['certificatesPol'] = $certificatesPol;
    }
    public function componentDetails()
    {
        return [
            'name' => 'CertificatesAndDiplomas Component',
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
}
