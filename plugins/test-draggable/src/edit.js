/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */

import { Draggable, Panel, PanelBody } from '@wordpress/components';
// import { Icon, more } from '@wordpress/icons';
import { useBlockProps } from '@wordpress/block-editor';
// Import icons from @wordpress/icons
// import { Icon, more } from '@wordpress/icons';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */

export default function Edit() {
    const onDragStart = () => {
        // Define what should happen on drag start
    };

    const onDragEnd = () => {
        // Define what should happen on drag end
    };

    return (
        <div {...useBlockProps()}>
            <Panel header="Draggable panel">
                <PanelBody>
                    <Draggable
                        elementId="draggable-panel"
                        transferData={{}}
                        onDragStart={onDragStart}
                        onDragEnd={onDragEnd}
                    >
                        {({ onDraggableStart, onDraggableEnd }) => (
                            <div
                                className="example-drag-handle"
                                draggable
                                onDragStart={onDraggableStart}
                                onDragEnd={onDraggableEnd}
                            >
                                <h2>This is a draggable heading</h2>
                            </div>
                        )}
                    </Draggable>
                </PanelBody>
            </Panel>
        </div>
    );
}