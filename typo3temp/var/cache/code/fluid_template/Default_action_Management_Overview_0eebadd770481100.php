<?php
class Default_action_Management_Overview_0eebadd770481100 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'headless' => 
  array (
    0 => 'FriendsOfTYPO3\\Headless\\ViewHelpers',
  ),
  'rd' => 
  array (
    0 => 'TYPO3\\CMS\\Redirects\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/modal.js',
'1' => '@typo3/backend/multi-record-selection.js',
'2' => '@typo3/backend/multi-record-selection-edit-action.js',
'3' => '@typo3/backend/multi-record-selection-delete-action.js',
'4' => '@typo3/redirects/redirects-module.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:heading_text',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'action' => 'overview',
'page' => $renderingContext->getVariableProvider()->getByPath('pagination.current'),
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('demand.orderField'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.orderDirection'),
];

$arguments8 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array10,
];

$arguments6 = [
'name' => 'returnUrl',
'value' => TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext),
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('redirects');
};

$arguments13 = [
'subject' => NULL,
];
$renderChildrenClosure14 = ($arguments13['subject'] !== null) ? function() use ($arguments13) { return $arguments13['subject']; } : $renderChildrenClosure14;
$array12 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments11 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'filter',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'table',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output16 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output16 .= '
        ';
return $output16;
},
'__else' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.constraints'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'filter',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output32 = '';

$output32 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.message',
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output32 .= '</p>
                        <a class="btn btn-default" href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$array37 = [
'action' => 'overview',
];

$arguments35 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array37,
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output32 .= '">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_no_filter',
];

$output32 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output32 .= '
                        </a>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$arguments43 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create',
];

$output42 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output42 .= '
                        ';
return $output42;
};

$arguments40 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => NULL,
'pid' => NULL,
'defaultValues' => [],
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'class' => 'btn btn-primary',
'table' => 'sys_redirect',
];

$output32 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output32 .= '
                    ';
return $output32;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found_with_filter.title',
];

$arguments28 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => -2,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext),
];
$renderChildrenClosure29 = ($arguments28['message'] !== null) ? function() use ($arguments28) { return $arguments28['message']; } : $renderChildrenClosure29;
$output25 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '

                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$array49 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'page' => 987654322,
];

$arguments47 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array49,
];
return TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);
};

$arguments45 = [
'value' => NULL,
'name' => 'gotToPageUrl',
];
$renderChildrenClosure46 = ($arguments45['value'] !== null) ? function() use ($arguments45) { return $arguments45['value']; } : $renderChildrenClosure46;
$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output25 .= '
                    <form data-on-submit="processNavigate">
                        <input type="hidden" value="1" name="paginator-target-page" data-number-of-pages="1" data-url="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('gotToPageUrl')]);

$output25 .= '"/>
                    </form>
                ';
return $output25;
},
'__else' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                        <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.message',
];

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '</p>
                        ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
$output60 = '';

$output60 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_create',
];

$output60 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]);

$output60 .= '
                        ';
return $output60;
};

$arguments58 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'uid' => NULL,
'pid' => NULL,
'defaultValues' => [],
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'class' => 'btn btn-primary',
'table' => 'sys_redirect',
];

$output55 .= TYPO3\CMS\Backend\ViewHelpers\Link\NewRecordViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output55 .= '
                    ';
return $output55;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return NULL;
};

$arguments53 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:redirect_not_found.title',
];

$arguments51 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => -1,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext),
];
$renderChildrenClosure52 = ($arguments51['message'] !== null) ? function() use ($arguments51) { return $arguments51['message']; } : $renderChildrenClosure52;
$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
                ';
return $output50;
},
];

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments22, static fn() => '', $renderingContext)
;

$output21 .= '
        ';
return $output21;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments11, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * section table
 */
public function section_7bc33296ab5744c8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output63 = '';

$output63 .= '
    ';

$output63 .= '';

$output63 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$array66 = [
'actions' => $renderingContext->getVariableProvider()->getByPath('actions'),
];

$arguments64 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'MultiRecordSelection/Actions',
'arguments' => $array66,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output63 .= '
    <div class="table-fit">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class="col-checkbox" colspan="2">
                        <div class="btn-group dropdown">
                            <a href="javascript:;" class="dropdown-toggle t3js-multi-record-selection-check-actions-toggle" data-bs-toggle="dropdown" data-bs-boundary="window" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.openSelectionOptions',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output63 .= '">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection',
'size' => 'small',
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output63 .= '
                            </a>
                            <ul class="dropdown-menu t3js-multi-record-selection-check-actions">
                                <li>
                                    <button type="button" class="dropdown-item disabled" data-multi-record-selection-check-action="check-all" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.checkAll',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output63 .= '">
                                        <span class="dropdown-item-columns">
                                            <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-all',
'size' => 'small',
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);

$output63 .= '
                                            </span>
                                            <span class="dropdown-item-column dropdown-item-column-title">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.checkAll',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output63 .= '
                                            </span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item disabled" data-multi-record-selection-check-action="check-none" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.uncheckAll',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output63 .= '">
                                        <span class="dropdown-item-columns">
                                            <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};

$arguments79 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-none',
'size' => 'small',
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output63 .= '
                                            </span>
                                            <span class="dropdown-item-column dropdown-item-column-title">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.uncheckAll',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output63 .= '
                                            </span>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-multi-record-selection-check-action="toggle" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$arguments83 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.toggleSelection',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output63 .= '">
                                        <span class="dropdown-item-columns">
                                            <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-invert',
'size' => 'small',
];

$output63 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output63 .= '
                                            </span>
                                            <span class="dropdown-item-column dropdown-item-column-title">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$arguments87 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.toggleSelection',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output63 .= '
                                            </span>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </th>
                    <th class="col-path">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$array91 = [
'field' => 'source_host',
'label' => 'sys_redirect.source_host',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments89 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'listHeaderSorting',
'arguments' => $array91,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output63 .= '
                    </th>
                    <th class="col-path">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure93 = function() use ($renderingContext) {
return NULL;
};

$array94 = [
'field' => 'source_path',
'label' => 'sys_redirect.source_path',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments92 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'listHeaderSorting',
'arguments' => $array94,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);

$output63 .= '
                    </th>
                    <th class="col-path">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output63 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:destination_status_code',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output63 .= '</th>
                    <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:overview.tableHead.protected',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output63 .= '</th>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array102 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression103 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments101 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression103(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array102)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output104 = '';

$output104 .= '
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$array107 = [
'field' => 'hitcount',
'label' => 'sys_redirect.hitcount',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments105 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'listHeaderSorting',
'arguments' => $array107,
];

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output104 .= '</th>
                        <th class="col-datetime">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};

$array110 = [
'field' => 'lasthiton',
'label' => 'sys_redirect.lasthiton',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand'),
];

$arguments108 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'listHeaderSorting',
'arguments' => $array110,
];

$output104 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext);

$output104 .= '</th>
                    ';
return $output104;
},
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments101, static fn() => '', $renderingContext)
;

$output63 .= '
                    <th class="col-control">
                        <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels._CONTROL_',
];

$output63 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output63 .= '</span>
                    </th>
                </tr>
            </thead>
            <tbody data-multi-record-selection-row-selection="true">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
$output115 = '';

$output115 .= '
                    <tr
                        class="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array117 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.integrity_status'),
'1' => ' !== ',
'2' => $renderingContext->getVariableProvider()->getByPath('defaultIntegrityStatus'),
];

$expression118 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) !== TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments116 = [
'then' => 'danger',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression118(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)),
    $renderingContext
),
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, static fn() => '', $renderingContext)
;

$output115 .= '"
                        data-uid="';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.uid')]);

$output115 .= '"
                        data-multi-record-selection-element="true"
                    >
                        <td class="col-checkbox">
                            <span class="form-check form-check-type-toggle">
                                <input class="form-check-input t3js-multi-record-selection-check" type="checkbox">
                            </span>
                        </td>
                        <td class="col-icon">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
$output143 = '';

$output143 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array145 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.disabled'),
];

$expression146 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments144 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression146(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output147 = '';

$output147 .= '<span title="';

$output147 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('disable')]);

$output147 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$arguments148 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
];

$output147 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '</span>';
return $output147;
},
'__else' => function() use ($renderingContext) {
$output165 = '';

$output165 .= '<span>';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure167 = function() use ($renderingContext) {
return NULL;
};

$arguments166 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
];

$output165 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);

$output165 .= '</span>';
return $output165;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array150 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'1' => ' && !',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression151 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression151(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array150)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output152 = '';

$output152 .= '<span title="';

$output152 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlystart')]);

$output152 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure154 = function() use ($renderingContext) {
return NULL;
};

$arguments153 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
];

$output152 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments153, $renderChildrenClosure154, $renderingContext);

$output152 .= '</span>';
return $output152;
}
    ],
    1 => [
        'condition' => function() use ($renderingContext) {

$array155 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'2' => ' && ',
'3' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression156 = function($context) {return (!(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"])) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node3"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression156(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array155)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output157 = '';

$output157 .= '<span title="';

$output157 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('onlyend')]);

$output157 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure159 = function() use ($renderingContext) {
return NULL;
};

$arguments158 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
];

$output157 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output157 .= '</span>';
return $output157;
}
    ],
    2 => [
        'condition' => function() use ($renderingContext) {

$array160 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
];

$expression161 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression161(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array160)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output162 = '';

$output162 .= '<span title="';

$output162 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('startend')]);

$output162 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper
$renderChildrenClosure164 = function() use ($renderingContext) {
return NULL;
};

$arguments163 = [
'size' => \TYPO3\CMS\Core\Imaging\IconSize::SMALL,
'alternativeMarkupIdentifier' => NULL,
'table' => 'sys_redirect',
'row' => $renderingContext->getVariableProvider()->getByPath('redirect'),
];

$output162 .= TYPO3\CMS\Core\ViewHelpers\IconForRecordViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output162 .= '</span>';
return $output162;
}
    ],
],
];

$output143 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments144, static fn() => '', $renderingContext)
;

$output143 .= '
                            ';
return $output143;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:record_disabled',
];
$output124 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$arguments125 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start',
];

$output124 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output124 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'format' => 'Y-m-d H:i',
];
$renderChildrenClosure128 = ($arguments127['date'] !== null) ? function() use ($arguments127) { return $arguments127['date']; } : $renderChildrenClosure128;
$output124 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);
$output129 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure131 = function() use ($renderingContext) {
return NULL;
};

$arguments130 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop',
];

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};

$arguments132 = [
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
'format' => 'Y-m-d H:i',
];
$renderChildrenClosure133 = ($arguments132['date'] !== null) ? function() use ($arguments132) { return $arguments132['date']; } : $renderChildrenClosure133;
$output129 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
$output134 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};

$arguments135 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:start',
];

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext);

$output134 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure138 = function() use ($renderingContext) {
return NULL;
};

$arguments137 = [
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.starttime'),
'format' => 'Y-m-d H:i',
];
$renderChildrenClosure138 = ($arguments137['date'] !== null) ? function() use ($arguments137) { return $arguments137['date']; } : $renderChildrenClosure138;
$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output134 .= ' - ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
return NULL;
};

$arguments139 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:stop',
];

$output134 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output134 .= ': ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};

$arguments141 = [
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'date' => $renderingContext->getVariableProvider()->getByPath('redirect.endtime'),
'format' => 'Y-m-d H:i',
];
$renderChildrenClosure142 = ($arguments141['date'] !== null) ? function() use ($arguments141) { return $arguments141['date']; } : $renderChildrenClosure142;
$output134 .= TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$array121 = [
'disable' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext),
'onlystart' => $output124,
'onlyend' => $output129,
'startend' => $output134,
];

$arguments119 = [
'map' => $array121,
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);

$output115 .= '
                        </td>
                        <td class="col-path">';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_host')]);

$output115 .= '</td>
                        <td class="col-path">
                            ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure169 = function() use ($renderingContext) {
$output173 = '';

$output173 .= '
                                ';

$output173 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.source_path')]);

$output173 .= '
                            ';
return $output173;
};
$output170 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure172 = function() use ($renderingContext) {
return NULL;
};

$arguments171 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit',
];

$output170 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments171, $renderChildrenClosure172, $renderingContext);

$output170 .= ': ';

$output170 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path');

$arguments168 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'fields' => NULL,
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'table' => 'sys_redirect',
'uid' => $renderingContext->getVariableProvider()->getByPath('redirect.uid'),
'title' => $output170,
];

$output115 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments168, $renderChildrenClosure169, $renderingContext);

$output115 .= '
                        </td>
                        <td class="col-path">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure175 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};

$arguments176 = [
'additionalParams' => '',
'language' => NULL,
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parameter' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
];

$arguments174 = [
'name' => 'targetUri',
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\TypolinkViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext),
];
$renderChildrenClosure175 = ($arguments174['value'] !== null) ? function() use ($arguments174) { return $arguments174['value']; } : $renderChildrenClosure175;
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments174, $renderChildrenClosure175, $renderingContext)]);

$output115 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure179 = function() use ($renderingContext) {
$output186 = '';

$output186 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array188 = [
'0' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
];

$expression189 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments187 = [
'then' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('targetUri')]),
'else' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target')]),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression189(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array188)),
    $renderingContext
),
];

$output186 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments187, static fn() => '', $renderingContext)
;

$output186 .= '
                            ';
return $output186;
};
$output180 = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure182 = function() use ($renderingContext) {
return NULL;
};

$arguments181 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:visit_destination',
];

$output180 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments181, $renderChildrenClosure182, $renderingContext);

$output180 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array184 = [
'0' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
];

$expression185 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments183 = [
'then' => $renderingContext->getVariableProvider()->getByPath('targetUri'),
'else' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression185(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array184)),
    $renderingContext
),
];

$output180 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments183, static fn() => '', $renderingContext)
;

$arguments178 = [
'class' => '',
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
'parameter' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
'target' => '_blank',
'title' => $output180,
];

$output115 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments178, $renderChildrenClosure179, $renderingContext);

$output115 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure191 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper
$renderChildrenClosure193 = function() use ($renderingContext) {
return NULL;
};

$arguments192 = [
'target' => $renderingContext->getVariableProvider()->getByPath('redirect.target'),
];

$arguments190 = [
'name' => 'pageId',
'value' => TYPO3\CMS\Redirects\ViewHelpers\TargetPageIdViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext),
];
$renderChildrenClosure191 = ($arguments190['value'] !== null) ? function() use ($arguments190) { return $arguments190['value']; } : $renderChildrenClosure191;
$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments190, $renderChildrenClosure191, $renderingContext)]);

$output115 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array195 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$expression196 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments194 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression196(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array195)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output197 = '';

$output197 .= '(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure199 = function() use ($renderingContext) {
return NULL;
};

$arguments198 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:pageID',
];

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments198, $renderChildrenClosure199, $renderingContext)]);

$output197 .= ': ';

$output197 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output197 .= ')';
return $output197;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments194, static fn() => '', $renderingContext)
;

$output115 .= '
                        </td>
                        <td>';

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.target_statuscode')]);

$output115 .= '</td>
                        <td>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array201 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.protected'),
];

$expression202 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments200 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression202(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array201)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output203 = '';

$output203 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext) {
return NULL;
};

$arguments204 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:overview.tableField.protected.yes',
];

$output203 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);

$output203 .= '
                                ';
return $output203;
},
'__else' => function() use ($renderingContext) {
$output206 = '';

$output206 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure208 = function() use ($renderingContext) {
return NULL;
};

$arguments207 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:overview.tableField.protected.no',
];

$output206 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments207, $renderChildrenClosure208, $renderingContext)]);

$output206 .= '
                                ';
return $output206;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments200, static fn() => '', $renderingContext)
;

$output115 .= '
                        </td>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array210 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression211 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments209 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression211(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array210)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output212 = '';

$output212 .= '
                            <td>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array214 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount'),
];

$expression215 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments213 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression215(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array214)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output216 = '';

$output216 .= '
                                    ';

$output216 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.hitcount')]);

$output216 .= '
                                ';
return $output216;
},
];

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments213, static fn() => '', $renderingContext)
;

$output212 .= '
                            </td>
                            <td class="col-datetime">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array218 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton'),
];

$expression219 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments217 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression219(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array218)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure221 = function() use ($renderingContext) {
$output222 = '';

$output222 .= '@';

$output222 .= $renderingContext->getVariableProvider()->getByPath('redirect.lasthiton');
return $output222;
};

$arguments220 = [
'date' => NULL,
'pattern' => NULL,
'locale' => NULL,
'base' => NULL,
'format' => 'Y-m-d H:i',
];
$renderChildrenClosure221 = ($arguments220['date'] !== null) ? function() use ($arguments220) { return $arguments220['date']; } : $renderChildrenClosure221;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments220, $renderChildrenClosure221, $renderingContext)]);
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure224 = function() use ($renderingContext) {
return NULL;
};

$arguments223 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_last_never',
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments223, $renderChildrenClosure224, $renderingContext)]);
},
];

$output212 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments217, static fn() => '', $renderingContext)
;

$output212 .= '
                            </td>
                        ';
return $output212;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments209, static fn() => '', $renderingContext)
;

$output115 .= '
                        <td class="col-control">
                            <div class="btn-group" role="group">
                                ';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper
$renderChildrenClosure226 = function() use ($renderingContext) {
$output229 = '';

$output229 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure231 = function() use ($renderingContext) {
return NULL;
};

$arguments230 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output229 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments230, $renderChildrenClosure231, $renderingContext);

$output229 .= '
                                ';
return $output229;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure228 = function() use ($renderingContext) {
return NULL;
};

$arguments227 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:edit',
];

$arguments225 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'fields' => NULL,
'returnUrl' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
'class' => 'btn btn-default',
'table' => 'sys_redirect',
'uid' => $renderingContext->getVariableProvider()->getByPath('redirect.uid'),
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments227, $renderChildrenClosure228, $renderingContext),
];

$output115 .= TYPO3\CMS\Backend\ViewHelpers\Link\EditRecordViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);

$output115 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array233 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.disabled'),
'1' => ' == 1',
];

$expression234 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments232 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression234(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array233)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output235 = '';

$output235 .= '
                                        <a
                                            class="btn btn-default"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure237 = function() use ($renderingContext) {
return NULL;
};
$output238 = '';

$output238 .= 'data[sys_redirect][';

$output238 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output238 .= '][disabled]=0';

$array239 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments236 = [
'currentUrlParameterName' => NULL,
'route' => 'tce_db',
'query' => $output238,
'arguments' => $array239,
];

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments236, $renderChildrenClosure237, $renderingContext)]);

$output235 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext) {
return NULL;
};

$arguments240 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:unHide',
];

$output235 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output235 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure243 = function() use ($renderingContext) {
return NULL;
};

$arguments242 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-unhide',
];

$output235 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments242, $renderChildrenClosure243, $renderingContext);

$output235 .= '
                                        </a>
                                    ';
return $output235;
},
'__else' => function() use ($renderingContext) {
$output244 = '';

$output244 .= '
                                        <a
                                            class="btn btn-default"
                                            href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure246 = function() use ($renderingContext) {
return NULL;
};
$output247 = '';

$output247 .= 'data[sys_redirect][';

$output247 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output247 .= '][disabled]=1';

$array248 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments245 = [
'currentUrlParameterName' => NULL,
'route' => 'tce_db',
'query' => $output247,
'arguments' => $array248,
];

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext)]);

$output244 .= '"
                                            title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure250 = function() use ($renderingContext) {
return NULL;
};

$arguments249 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:hide',
];

$output244 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments249, $renderChildrenClosure250, $renderingContext)]);

$output244 .= '"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure252 = function() use ($renderingContext) {
return NULL;
};

$arguments251 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-hide',
];

$output244 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);

$output244 .= '
                                        </a>
                                    ';
return $output244;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments232, static fn() => '', $renderingContext)
;

$output115 .= '
                                <a class="btn btn-default t3js-modal-trigger"
                                    href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure254 = function() use ($renderingContext) {
return NULL;
};
$output255 = '';

$output255 .= 'cmd[sys_redirect][';

$output255 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output255 .= '][delete]=1';

$array256 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments253 = [
'currentUrlParameterName' => NULL,
'route' => 'tce_db',
'query' => $output255,
'arguments' => $array256,
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments253, $renderChildrenClosure254, $renderingContext)]);

$output115 .= '"
                                    title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure258 = function() use ($renderingContext) {
return NULL;
};

$arguments257 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_mod_web_list.xlf:delete',
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext)]);

$output115 .= '"
                                    data-severity="warning"
                                    data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure260 = function() use ($renderingContext) {
return NULL;
};

$arguments259 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:label.confirm.delete_record.title',
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments259, $renderChildrenClosure260, $renderingContext)]);

$output115 .= '"
                                    data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure262 = function() use ($renderingContext) {
return NULL;
};

$arguments261 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:deleteWarning',
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments261, $renderChildrenClosure262, $renderingContext)]);

$output115 .= '"
                                    data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure264 = function() use ($renderingContext) {
return NULL;
};

$arguments263 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no',
];

$output115 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext)]);

$output115 .= '">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure266 = function() use ($renderingContext) {
return NULL;
};

$arguments265 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-delete',
];

$output115 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments265, $renderChildrenClosure266, $renderingContext);

$output115 .= '
                                </a>
                            </div>
                            <div class="btn-group dropdown" role="group">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array268 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.is_regexp'),
'1' => ' || (',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.source_host'),
'3' => ' === \'*\')',
];

$expression269 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) === '*'));};

$arguments267 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression269(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array268)),
    $renderingContext
),
'__else' => function() use ($renderingContext) {
$output270 = '';

$output270 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure272 = function() use ($renderingContext) {
return NULL;
};

$arguments271 = [
'name' => 'showPreviewButton',
'value' => 1,
];
$renderChildrenClosure272 = ($arguments271['value'] !== null) ? function() use ($arguments271) { return $arguments271['value']; } : $renderChildrenClosure272;
$output270 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments271, $renderChildrenClosure272, $renderingContext)]);

$output270 .= '
                                    ';
return $output270;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments267, static fn() => '', $renderingContext)
;

$output115 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array274 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
'1' => ' && !',
'2' => $renderingContext->getVariableProvider()->getByPath('redirect.disable_hitcount'),
];

$expression275 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])));};

$arguments273 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression275(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array274)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output276 = '';

$output276 .= '
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure278 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array280 = [
'0' => $renderingContext->getVariableProvider()->getByPath('redirect.hitcount'),
'1' => ' != 0',
];

$expression281 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 0);};

$arguments279 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression281(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array280)),
    $renderingContext
),
];

$arguments277 = [
'name' => 'showHitCountResetButton',
'value' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments279, static fn() => '', $renderingContext)
,
];
$renderChildrenClosure278 = ($arguments277['value'] !== null) ? function() use ($arguments277) { return $arguments277['value']; } : $renderChildrenClosure278;
$output276 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments277, $renderChildrenClosure278, $renderingContext)]);

$output276 .= '
                                ';
return $output276;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments273, static fn() => '', $renderingContext)
;

$output115 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array283 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showPreviewButton'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('showHitCountResetButton'),
];

$expression284 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments282 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression284(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array283)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output285 = '';

$output285 .= '
                                        <a
                                            href="#actions-';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.uid')]);

$output285 .= '"
                                            class="btn btn-default dropdown-toggle dropdown-toggle-no-chevron"
                                            data-bs-toggle="dropdown"
                                            data-bs-boundary="window"
                                            aria-expanded="false"
                                        >
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure287 = function() use ($renderingContext) {
return NULL;
};

$arguments286 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-menu-alternative',
];

$output285 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
                                        </a>
                                        <ul id="actions-';

$output285 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('redirect.uid')]);

$output285 .= '" class="dropdown-menu">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array289 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showPreviewButton'),
];

$expression290 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments288 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression290(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array289)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output291 = '';

$output291 .= '
                                                <li>
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper
$renderChildrenClosure293 = function() use ($renderingContext) {
$output295 = '';

$output295 .= '
                                                        <span class="dropdown-item-columns">
                                                            <span class="dropdown-item-column dropdown-item-column-icon text-';

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cacheAction.severity')]);

$output295 .= '">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure297 = function() use ($renderingContext) {
return NULL;
};

$arguments296 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-view-page',
];

$output295 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);

$output295 .= '
                                                            </span>
                                                            <span class="dropdown-item-column dropdown-item-column-text">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure299 = function() use ($renderingContext) {
return NULL;
};

$arguments298 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:view_redirect',
];

$output295 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments298, $renderChildrenClosure299, $renderingContext)]);

$output295 .= '
                                                            </span>
                                                        </span>
                                                    ';
return $output295;
};
$output294 = '';

$output294 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_host');

$output294 .= $renderingContext->getVariableProvider()->getByPath('redirect.source_path');

$arguments292 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'defaultScheme' => 'https',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'class' => 'dropdown-item',
'uri' => $output294,
'target' => '_blank',
];

$output291 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ExternalViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);

$output291 .= '
                                                </li>
                                            ';
return $output291;
},
];

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments288, static fn() => '', $renderingContext)
;

$output285 .= '
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array301 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCountResetButton'),
];

$expression302 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments300 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression302(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array301)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output303 = '';

$output303 .= '
                                                <li>
                                                    <a
                                                        class="dropdown-item t3js-modal-trigger"
                                                        href="';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper
$renderChildrenClosure305 = function() use ($renderingContext) {
return NULL;
};
$output306 = '';

$output306 .= 'data[sys_redirect][';

$output306 .= $renderingContext->getVariableProvider()->getByPath('redirect.uid');

$output306 .= '][hitcount]=0';

$array307 = [
'redirect' => $renderingContext->getVariableProvider()->getByPath('returnUrl'),
];

$arguments304 = [
'currentUrlParameterName' => NULL,
'route' => 'tce_db',
'query' => $output306,
'arguments' => $array307,
];

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Backend\ViewHelpers\ModuleLinkViewHelper::renderStatic($arguments304, $renderChildrenClosure305, $renderingContext)]);

$output303 .= '"
                                                        data-severity="warning"
                                                        data-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure309 = function() use ($renderingContext) {
return NULL;
};

$arguments308 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.title',
];

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments308, $renderChildrenClosure309, $renderingContext)]);

$output303 .= '"
                                                        data-bs-content="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure311 = function() use ($renderingContext) {
return NULL;
};

$arguments310 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset.confirm.content',
];

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments310, $renderChildrenClosure311, $renderingContext)]);

$output303 .= '"
                                                        data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure313 = function() use ($renderingContext) {
return NULL;
};

$arguments312 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang_alt_doc.xlf:buttons.confirm.delete_record.no',
];

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments312, $renderChildrenClosure313, $renderingContext)]);

$output303 .= '"
                                                    >
                                                        <span class="dropdown-item-columns">
                                                            <span class="dropdown-item-column dropdown-item-column-icon">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure315 = function() use ($renderingContext) {
return NULL;
};

$arguments314 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-restore',
];

$output303 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments314, $renderChildrenClosure315, $renderingContext);

$output303 .= '
                                                            </span>
                                                            <span class="dropdown-item-column dropdown-item-column-text">
                                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure317 = function() use ($renderingContext) {
return NULL;
};

$arguments316 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:hit_reset',
];

$output303 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext)]);

$output303 .= '
                                                            </span>
                                                        </span>
                                                    </a>
                                                </li>
                                            ';
return $output303;
},
];

$output285 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments300, static fn() => '', $renderingContext)
;

$output285 .= '
                                        </ul>
                                    ';
return $output285;
},
'__else' => function() use ($renderingContext) {
$output318 = '';

$output318 .= '
                                        <span class="btn btn-default disabled">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure320 = function() use ($renderingContext) {
return NULL;
};

$arguments319 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'empty-empty',
];

$output318 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments319, $renderChildrenClosure320, $renderingContext);

$output318 .= '</span>
                                    ';
return $output318;
},
];

$output115 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments282, static fn() => '', $renderingContext)
;

$output115 .= '
                            </div>
                        </td>
                    </tr>
                ';
return $output115;
};

$arguments113 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('redirects'),
'key' => 'domainName',
'as' => 'redirect',
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output63 .= '
            </tbody>
        </table>
    </div>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure322 = function() use ($renderingContext) {
return NULL;
};

$array323 = [
'actions' => $renderingContext->getVariableProvider()->getByPath('actions'),
];

$arguments321 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'MultiRecordSelection/Actions',
'arguments' => $array323,
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext);

$output63 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure325 = function() use ($renderingContext) {
return NULL;
};

$arguments324 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Pagination',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output63 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);

$output63 .= '
';

    return $output63;
}
/**
 * section listHeaderSorting
 */
public function section_faf4104e37247c07(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output326 = '';

$output326 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array328 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.orderField'),
'1' => ' === ',
'2' => $renderingContext->getVariableProvider()->getByPath('field'),
];

$expression329 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) === TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments327 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression329(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array328)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output330 = '';

$output330 .= '
            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure332 = function() use ($renderingContext) {
return NULL;
};

$array333 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('field'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.reverseOrderDirection'),
];

$arguments331 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array333,
];

$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments331, $renderChildrenClosure332, $renderingContext)]);

$output330 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure335 = function() use ($renderingContext) {
return NULL;
};
$output336 = '';

$output336 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:';

$output336 .= $renderingContext->getVariableProvider()->getByPath('label');

$arguments334 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $output336,
];

$output330 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);

$output330 .= '
            </a>
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure338 = function() use ($renderingContext) {
return NULL;
};
$output339 = '';

$output339 .= 'status-status-sorting-';

$output339 .= $renderingContext->getVariableProvider()->getByPath('demand.orderDirection');

$arguments337 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => $output339,
];

$output330 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments337, $renderChildrenClosure338, $renderingContext);

$output330 .= '
        ';
return $output330;
},
'__else' => function() use ($renderingContext) {
$output340 = '';

$output340 .= '
            <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure342 = function() use ($renderingContext) {
return NULL;
};

$array343 = [
'action' => 'overview',
'demand' => $renderingContext->getVariableProvider()->getByPath('demand.parameters'),
'orderField' => $renderingContext->getVariableProvider()->getByPath('field'),
'orderDirection' => $renderingContext->getVariableProvider()->getByPath('demand.defaultOrderDirection'),
];

$arguments341 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array343,
];

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments341, $renderChildrenClosure342, $renderingContext)]);

$output340 .= '">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext) {
return NULL;
};
$output346 = '';

$output346 .= 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:';

$output346 .= $renderingContext->getVariableProvider()->getByPath('label');

$arguments344 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $output346,
];

$output340 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output340 .= '
            </a>
        ';
return $output340;
},
];

$output326 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments327, static fn() => '', $renderingContext)
;

$output326 .= '
';

    return $output326;
}
/**
 * section filter
 */
public function section_f3316da27e7b7edd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output347 = '';

$output347 .= '
    <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure349 = function() use ($renderingContext) {
return NULL;
};

$array350 = [
'action' => 'overview',
];

$arguments348 = [
'referenceType' => 'absolute',
'route' => 'site_redirects',
'parameters' => $array350,
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext)]);

$output347 .= '" method="post" enctype="multipart/form-data" name="demand">
        <input type="hidden" name="orderField" value="';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.orderField')]);

$output347 .= '">
        <input type="hidden" name="orderDirection" value="';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.orderDirection')]);

$output347 .= '">
        <div class="form-row">
            <div class="form-group">
                <label for="demand-source-host" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure352 = function() use ($renderingContext) {
return NULL;
};

$arguments351 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext)]);

$output347 .= '</label>
                <select id="demand-source-host" class="form-select" name="demand[source_host]" data-on-change="submit">
                    <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure354 = function() use ($renderingContext) {
return NULL;
};

$arguments353 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments353, $renderChildrenClosure354, $renderingContext)]);

$output347 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure356 = function() use ($renderingContext) {
$output357 = '';

$output357 .= '
                        <option value="';

$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name')]);

$output357 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array359 = [
'0' => $renderingContext->getVariableProvider()->getByPath('host.name'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('demand.firstSourceHost'),
];

$expression360 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments358 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression360(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array359)),
    $renderingContext
),
];

$output357 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments358, static fn() => '', $renderingContext)
;

$output357 .= '>';

$output357 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('host.name')]);

$output357 .= '</option>
                    ';
return $output357;
};

$arguments355 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('hosts'),
'as' => 'host',
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output347 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-source-path" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure362 = function() use ($renderingContext) {
return NULL;
};

$arguments361 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext)]);

$output347 .= '</label>
                <input type="text" id="demand-source-path" class="form-control" name="demand[source_path]" value="';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.sourcePath')]);

$output347 .= '"/>
            </div>
            <div class="form-group">
                <label for="demand-target" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure364 = function() use ($renderingContext) {
return NULL;
};

$arguments363 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments363, $renderChildrenClosure364, $renderingContext)]);

$output347 .= '</label>
                <input type="text" id="demand-target" class="form-control" name="demand[target]" value="';

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('demand.target')]);

$output347 .= '"/>
            </div>
            <div class="form-group">
                <label for="demand-target-status-code" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure366 = function() use ($renderingContext) {
return NULL;
};

$arguments365 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.targetStatusCode',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext)]);

$output347 .= '</label>
                <select id="demand-target-status-code" class="form-select" name="demand[target_statuscode]" data-on-change="submit">
                    <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure368 = function() use ($renderingContext) {
return NULL;
};

$arguments367 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.source_host.showAll',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments367, $renderChildrenClosure368, $renderingContext)]);

$output347 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure370 = function() use ($renderingContext) {
$output371 = '';

$output371 .= '
                        <option value="';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code')]);

$output371 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array373 = [
'0' => $renderingContext->getVariableProvider()->getByPath('statusCode.code'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('demand.firstStatusCode'),
];

$expression374 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments372 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression374(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array373)),
    $renderingContext
),
];

$output371 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments372, static fn() => '', $renderingContext)
;

$output371 .= '>';

$output371 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('statusCode.code')]);

$output371 .= '</option>
                    ';
return $output371;
};

$arguments369 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('statusCodes'),
'as' => 'statusCode',
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output347 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-target-automatically-created" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure376 = function() use ($renderingContext) {
return NULL;
};

$arguments375 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.creationType',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext)]);

$output347 .= '</label>
                <select id="demand-target-automatically-created" class="form-select" name="demand[creation_type]" data-on-change="submit">
                    <option value="-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure378 = function() use ($renderingContext) {
return NULL;
};

$arguments377 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.creationType.showAll',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext)]);

$output347 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure380 = function() use ($renderingContext) {
$output381 = '';

$output381 .= '
                        <option value="';

$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('creationType')]);

$output381 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array383 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.creationType'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('creationType'),
];

$expression384 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments382 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression384(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array383)),
    $renderingContext
),
];

$output381 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments382, static fn() => '', $renderingContext)
;

$output381 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext) {
return NULL;
};

$arguments385 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('label'),
'default' => $renderingContext->getVariableProvider()->getByPath('label'),
];

$output381 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext)]);

$output381 .= '</option>
                    ';
return $output381;
};

$arguments379 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('creationTypes'),
'key' => 'creationType',
'as' => 'label',
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);

$output347 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-integrity-status" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure388 = function() use ($renderingContext) {
return NULL;
};

$arguments387 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.integrityStatus',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments387, $renderChildrenClosure388, $renderingContext)]);

$output347 .= '</label>
                <select id="demand-integrity-status" class="form-select" name="demand[integrity_status]" data-on-change="submit">
                    <option value="">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure390 = function() use ($renderingContext) {
return NULL;
};

$arguments389 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.integrityStatus.showAll',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments389, $renderChildrenClosure390, $renderingContext)]);

$output347 .= '</option>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure392 = function() use ($renderingContext) {
$output393 = '';

$output393 .= '
                        <option value="';

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('integrityStatusCode')]);

$output393 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array395 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.integrityStatus'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('integrityStatusCode'),
];

$expression396 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments394 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression396(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array395)),
    $renderingContext
),
];

$output393 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments394, static fn() => '', $renderingContext)
;

$output393 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext) {
return NULL;
};

$arguments397 = [
'id' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => $renderingContext->getVariableProvider()->getByPath('label'),
'default' => $renderingContext->getVariableProvider()->getByPath('label'),
];

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext)]);

$output393 .= '</option>
                    ';
return $output393;
};

$arguments391 = [
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('integrityStatusCodes'),
'key' => 'integrityStatusCode',
'as' => 'label',
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments391, $renderChildrenClosure392, $renderingContext);

$output347 .= '
                </select>
            </div>
            <div class="form-group">
                <label for="demand-target-protected" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure400 = function() use ($renderingContext) {
return NULL;
};

$arguments399 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.protected',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments399, $renderChildrenClosure400, $renderingContext)]);

$output347 .= '</label>
                <select id="demand-target-protected" class="form-select" name="demand[protected]" data-on-change="submit">
                    <option value="-1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure402 = function() use ($renderingContext) {
return NULL;
};

$arguments401 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.protected.showAll',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments401, $renderChildrenClosure402, $renderingContext)]);

$output347 .= '</option>
                    <option value="0" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array404 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.protected'),
'1' => ' == 0',
];

$expression405 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

$arguments403 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression405(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array404)),
    $renderingContext
),
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments403, static fn() => '', $renderingContext)
;

$output347 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure407 = function() use ($renderingContext) {
return NULL;
};

$arguments406 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.protected.unprotected',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments406, $renderChildrenClosure407, $renderingContext)]);

$output347 .= '</option>
                    <option value="1" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array409 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.protected'),
'1' => ' == 1',
];

$expression410 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};

$arguments408 = [
'then' => 'selected',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression410(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array409)),
    $renderingContext
),
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments408, static fn() => '', $renderingContext)
;

$output347 .= '>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure412 = function() use ($renderingContext) {
return NULL;
};

$arguments411 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.protected.protected',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments411, $renderChildrenClosure412, $renderingContext)]);

$output347 .= '</option>
                </select>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array414 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showHitCounter'),
];

$expression415 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments413 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression415(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array414)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output416 = '';

$output416 .= '
                <div class="form-group align-self-end">
                    <div class="form-check form-switch form-check-size-input">
                        <input type="checkbox" class="form-check-input" name="demand[max_hits]" id="demand-never-hit" value="1" data-on-change="submit" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array418 = [
'0' => $renderingContext->getVariableProvider()->getByPath('demand.maxHits'),
];

$expression419 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments417 = [
'then' => 'checked="checked"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression419(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array418)),
    $renderingContext
),
];

$output416 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments417, static fn() => '', $renderingContext)
;

$output416 .= '>
                        <label class="form-check-label" for="demand-never-hit">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure421 = function() use ($renderingContext) {
return NULL;
};

$arguments420 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.neverHit',
];

$output416 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext)]);

$output416 .= '
                        </label>
                    </div>
                </div>
            ';
return $output416;
},
];

$output347 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments413, static fn() => '', $renderingContext)
;

$output347 .= '
            <div class="form-group align-self-end">
                <input type="submit" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext) {
return NULL;
};

$arguments422 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.sendButton',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output347 .= '" class="btn btn-default" />
                <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure425 = function() use ($renderingContext) {
return NULL;
};

$arguments424 = [
'parameters' => [],
'referenceType' => 'absolute',
'route' => 'site_redirects',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext)]);

$output347 .= '" class="btn btn-link">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext) {
return NULL;
};

$arguments426 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'key' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:filter.resetButton',
];

$output347 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext)]);

$output347 .= '</a>
            </div>
        </div>
    </form>
';

    return $output347;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output428 = '';

$output428 .= '

';

$output428 .= '';

$output428 .= '

';

$output428 .= '';

$output428 .= '

';

$output428 .= '';

$output428 .= '

';

$output428 .= '';

$output428 .= '

';

$output428 .= '';

$output428 .= '

';

    return $output428;
}

}

#