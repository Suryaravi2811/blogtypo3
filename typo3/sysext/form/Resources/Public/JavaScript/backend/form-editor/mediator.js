/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
import $ from"jquery";import*as Helper from"@typo3/form/backend/form-editor/helper.js";let formEditorApp=null,viewModel=null;function getFormEditorApp(){return formEditorApp}function getViewModel(){return viewModel}function getUtility(){return getFormEditorApp().getUtility()}function assert(e,t,r){return getFormEditorApp().assert(e,t,r)}function getHelper(e){return getUtility().isUndefinedOrNull(e)?Helper.setConfiguration(getViewModel().getConfiguration()):Helper.setConfiguration(e)}function getCurrentlySelectedFormElement(){return getFormEditorApp().getCurrentlySelectedFormElement()}function getPublisherSubscriber(){return getFormEditorApp().getPublisherSubscriber()}function getRootFormElement(){return getFormEditorApp().getRootFormElement()}function subscribeEvents(){window.onbeforeunload=function(e){if(getFormEditorApp().getUnsavedContent())return(e=e||window.event)&&(e.returnValue=getFormEditorApp().getFormElementDefinition(getRootFormElement(),"modalCloseDialogMessage")),getFormEditorApp().getFormElementDefinition(getRootFormElement(),"modalCloseDialogTitle")},getPublisherSubscriber().subscribe("view/ready",(()=>{getViewModel().onViewReadyBatch()})),getPublisherSubscriber().subscribe("core/applicationState/add",((e,[t,r,o])=>{getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderRedo"))),o>1&&r<=o?getViewModel().enableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderUndo"))):getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderUndo")))})),getPublisherSubscriber().subscribe("core/ajax/saveFormDefinition/success",((e,[t])=>{getFormEditorApp().setUnsavedContent(!1),getViewModel().setPreviewMode(!1),getViewModel().showSaveSuccessMessage(),getViewModel().showSaveButtonSaveIcon(),getFormEditorApp().setFormDefinition(t.formDefinition),getViewModel().addStructureRootElementSelection(),getFormEditorApp().setCurrentlySelectedFormElement(getRootFormElement()),getViewModel().setStructureRootElementTitle(),getViewModel().setStageHeadline(),getViewModel().renderAbstractStageArea(),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("core/ajax/saveFormDefinition/error",((e,[t])=>{getViewModel().showSaveButtonSaveIcon(),getViewModel().showSaveErrorMessage({message:t.message})})),getPublisherSubscriber().subscribe("core/ajax/renderFormDefinitionPage/success",((e,[t,r])=>{getViewModel().renderPreviewStageArea(t)})),getPublisherSubscriber().subscribe("core/ajax/error",((e,[t,r,o])=>{0!==t.status&&(getViewModel().showErrorFlashMessage(r,o),getViewModel().renderPreviewStageArea(t.responseText))})),getPublisherSubscriber().subscribe("view/header/button/save/clicked",(()=>{getFormEditorApp().validationResultsHasErrors(getFormEditorApp().validateFormElementRecursive(getRootFormElement(),!0))?getViewModel().showValidationErrorsModal():(getViewModel().showSaveButtonSpinnerIcon(),getFormEditorApp().saveFormDefinition())})),getPublisherSubscriber().subscribe("view/header/formSettings/clicked",(()=>{getViewModel().setPreviewMode(!1),getViewModel().addStructureRootElementSelection(),getFormEditorApp().setCurrentlySelectedFormElement(getRootFormElement()),getViewModel().renderAbstractStageArea(),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/header/button/newPage/clicked",((e,[t])=>{getFormEditorApp().isRootFormElementSelected()&&getViewModel().selectPageBatch(0),getViewModel().showInsertPagesModal(t)})),getPublisherSubscriber().subscribe("view/header/button/close/clicked",(()=>{getViewModel().showCloseConfirmationModal()})),getPublisherSubscriber().subscribe("view/undoButton/clicked",(()=>{getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderUndo"))),getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderRedo"))),getFormEditorApp().undoApplicationState(),getViewModel().getPreviewMode()?getFormEditorApp().renderCurrentFormPage():getViewModel().renderAbstractStageArea(),getFormEditorApp().setUnsavedContent(!0),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/redoButton/clicked",(()=>{getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderUndo"))),getViewModel().disableButton($(getHelper().getDomElementDataIdentifierSelector("buttonHeaderRedo"))),getFormEditorApp().redoApplicationState(),getViewModel().getPreviewMode()?getFormEditorApp().renderCurrentFormPage():getViewModel().renderAbstractStageArea(),getFormEditorApp().setUnsavedContent(!0),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/stage/element/clicked",((e,[t])=>{getCurrentlySelectedFormElement().get("__identifierPath")!==t&&(getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().renewStructure(),getViewModel().refreshSelectedElementItemsBatch(),getViewModel().addAbstractViewValidationResults(),getViewModel().renderInspectorEditors())})),getPublisherSubscriber().subscribe("view/stage/abstract/elementToolbar/button/newElement/clicked",((e,[t,r])=>{getFormEditorApp().isRootFormElementSelected()&&getViewModel().selectPageBatch(0),getViewModel().showInsertElementsModal(t,r)})),getPublisherSubscriber().subscribe("view/stage/abstract/button/newElement/clicked",((e,[t,r])=>{getFormEditorApp().isRootFormElementSelected()&&getViewModel().selectPageBatch(0),getViewModel().showInsertElementsModal(t,r||void 0)})),getPublisherSubscriber().subscribe("view/stage/abstract/dnd/start",((e,[t,r])=>{getViewModel().onAbstractViewDndStartBatch(t,r)})),getPublisherSubscriber().subscribe("view/stage/abstract/dnd/stop",((e,[t])=>{getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().renewStructure(),getViewModel().setPreviewMode(!1),getViewModel().renderAbstractStageArea(!1,!1),getViewModel().refreshSelectedElementItemsBatch(),getViewModel().addAbstractViewValidationResults(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/stage/abstract/dnd/change",((e,[t,r,o])=>{getViewModel().onAbstractViewDndChangeBatch(t,r,o)})),getPublisherSubscriber().subscribe("view/stage/abstract/dnd/update",((e,[t,r,o,i])=>{getViewModel().onAbstractViewDndUpdateBatch(t,r,o,i)})),getPublisherSubscriber().subscribe("view/viewModeButton/abstract/clicked",(()=>{getViewModel().getPreviewMode()&&(getViewModel().setPreviewMode(!1),getViewModel().renderAbstractStageArea())})),getPublisherSubscriber().subscribe("view/viewModeButton/preview/clicked",(()=>{getViewModel().getPreviewMode()||(getViewModel().setPreviewMode(!0),getFormEditorApp().renderCurrentFormPage())})),getPublisherSubscriber().subscribe("view/paginationPrevious/clicked",(()=>{getViewModel().selectPageBatch(getFormEditorApp().getCurrentlySelectedPageIndex()-1),getViewModel().getPreviewMode()?getFormEditorApp().renderCurrentFormPage():getViewModel().renderAbstractStageArea()})),getPublisherSubscriber().subscribe("view/paginationNext/clicked",(()=>{getViewModel().selectPageBatch(getFormEditorApp().getCurrentlySelectedPageIndex()+1),getViewModel().getPreviewMode()?getFormEditorApp().renderCurrentFormPage():getViewModel().renderAbstractStageArea()})),getPublisherSubscriber().subscribe("view/stage/abstract/render/postProcess",(()=>{getViewModel().renderUndoRedo()})),getPublisherSubscriber().subscribe("view/stage/preview/render/postProcess",(()=>{getViewModel().renderUndoRedo()})),getPublisherSubscriber().subscribe("view/tree/node/clicked",((e,[t])=>{let r;getCurrentlySelectedFormElement().get("__identifierPath")!==t&&(r=getFormEditorApp().getCurrentlySelectedPageIndex(),getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().setPreviewMode(!1),r!==getFormEditorApp().getCurrentlySelectedPageIndex()?getViewModel().renderAbstractStageArea():getViewModel().renderAbstractStageArea(!1),getViewModel().renderPagination(),getViewModel().renderInspectorEditors())})),getPublisherSubscriber().subscribe("view/tree/node/changed",((e,[t,r])=>{const o=getFormEditorApp().getFormElementByIdentifierPath(t);o.set("label",r),getViewModel().getStructure().setTreeNodeTitle(null,o),getCurrentlySelectedFormElement().get("__identifierPath")===t&&getViewModel().renderInspectorEditors(t,!1)})),getPublisherSubscriber().subscribe("view/structure/root/selected",(()=>{getFormEditorApp().isRootFormElementSelected()||(getViewModel().addStructureRootElementSelection(),getFormEditorApp().setCurrentlySelectedFormElement(getRootFormElement()),getViewModel().setPreviewMode(!1),getViewModel().renderAbstractStageArea(),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors())})),getPublisherSubscriber().subscribe("view/structure/button/newPage/clicked",((e,[t])=>{getFormEditorApp().isRootFormElementSelected()&&getViewModel().selectPageBatch(0),getViewModel().showInsertPagesModal(t)})),getPublisherSubscriber().subscribe("view/tree/dnd/stop",((e,[t])=>{getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().renewStructure(),getViewModel().renderPagination(),getViewModel().setPreviewMode(!1),getViewModel().renderAbstractStageArea(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/tree/dnd/change",((e,[t,r,o])=>{getViewModel().onStructureDndChangeBatch(t,r,o)})),getPublisherSubscriber().subscribe("view/tree/dnd/update",((e,[t,r,o,i])=>{getViewModel().onStructureDndUpdateBatch(t,r,o,i)})),getPublisherSubscriber().subscribe("view/structure/renew/postProcess",(()=>{getViewModel().addStructureValidationResults()})),getPublisherSubscriber().subscribe("view/inspector/removeCollectionElement/perform",((e,[t,r,o])=>{getViewModel().removePropertyCollectionElement(t,r,o||void 0)})),getPublisherSubscriber().subscribe("view/inspector/collectionElement/new/selected",((e,[t,r])=>{getViewModel().createAndAddPropertyCollectionElement(t,r)})),getPublisherSubscriber().subscribe("view/inspector/collectionElement/existing/selected",((e,[t,r])=>{getViewModel().renderInspectorCollectionElementEditors(r,t)})),getPublisherSubscriber().subscribe("view/inspector/collectionElements/dnd/update",((e,[t,r,o,i])=>{o?getViewModel().movePropertyCollectionElement(t,"before",o,i):r?getViewModel().movePropertyCollectionElement(t,"after",r,i):assert(!1,"Next element or previous element need to be set.",1477407673)})),getPublisherSubscriber().subscribe("core/formElement/somePropertyChanged",((e,[t,r,o,i])=>{"renderables"!==t&&(getFormEditorApp().isRootFormElementSelected()||"label"!==t?getFormEditorApp().getUtility().isUndefinedOrNull(i)||getRootFormElement().get("__identifierPath")!==i||(getViewModel().setStructureRootElementTitle(),getViewModel().setStageHeadline()):getViewModel().getStructure().setTreeNodeTitle(),getViewModel().getPreviewMode()?getFormEditorApp().renderCurrentFormPage():getViewModel().renderAbstractStageArea(!1,!1),getViewModel().addStructureValidationResults()),getFormEditorApp().setUnsavedContent(!0)})),getPublisherSubscriber().subscribe("view/formElement/removed",((e,[t])=>{getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().renewStructure(),getViewModel().renderAbstractStageArea(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/formElement/inserted",((e,[t])=>{getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().renewStructure(),getViewModel().renderAbstractStageArea(),getViewModel().renderPagination(),getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/collectionElement/new/added",(()=>{getViewModel().renderInspectorEditors()})),getPublisherSubscriber().subscribe("view/collectionElement/moved",(()=>{getViewModel().renderInspectorEditors(void 0,!1)})),getPublisherSubscriber().subscribe("view/collectionElement/removed",(()=>{getViewModel().renderInspectorEditors(void 0,!1)})),getPublisherSubscriber().subscribe("view/insertElements/perform/bottom",((e,[t])=>{const r=getFormEditorApp().getLastTopLevelElementOnCurrentPage();r?!getFormEditorApp().getFormElementDefinition(r,"_isTopLevelFormElement")&&getFormEditorApp().getFormElementDefinition(r,"_isCompositeFormElement")?getViewModel().createAndAddFormElement(t,getFormEditorApp().getCurrentlySelectedPage()):getViewModel().createAndAddFormElement(t,r):getViewModel().createAndAddFormElement(t,getFormEditorApp().getCurrentlySelectedPage())})),getPublisherSubscriber().subscribe("view/insertElements/perform/after",((e,[t])=>{let r;r=getViewModel().createAndAddFormElement(t,void 0,!0),r=getViewModel().moveFormElement(r,"after",getFormEditorApp().getCurrentlySelectedFormElement()),getPublisherSubscriber().publish("view/formElement/inserted",[r])})),getPublisherSubscriber().subscribe("view/insertElements/perform/inside",((e,[t])=>{getViewModel().createAndAddFormElement(t)})),getPublisherSubscriber().subscribe("view/insertPages/perform",((e,[t])=>{getViewModel().createAndAddFormElement(t)})),getPublisherSubscriber().subscribe("view/modal/close/perform",(()=>{getFormEditorApp().setUnsavedContent(!1),getViewModel().closeEditor()})),getPublisherSubscriber().subscribe("view/modal/removeFormElement/perform",((e,[t])=>{getViewModel().removeFormElement(t)})),getPublisherSubscriber().subscribe("view/modal/removeCollectionElement/perform",((e,[t,r,o])=>{getViewModel().removePropertyCollectionElement(t,r,o)})),getPublisherSubscriber().subscribe("view/modal/validationErrors/element/clicked",((e,[t])=>{let r;getCurrentlySelectedFormElement().get("__identifierPath")!==t&&(r=getFormEditorApp().getCurrentlySelectedPageIndex(),getFormEditorApp().setCurrentlySelectedFormElement(t),getViewModel().getPreviewMode()&&getViewModel().setPreviewMode(!1),r!==getFormEditorApp().getCurrentlySelectedPageIndex()?getViewModel().renderAbstractStageArea():getViewModel().renderAbstractStageArea(!1),getViewModel().renderPagination(),getViewModel().renderInspectorEditors())}))}export function bootstrap(e,t){formEditorApp=e,viewModel=t,Helper.bootstrap(formEditorApp),subscribeEvents()}