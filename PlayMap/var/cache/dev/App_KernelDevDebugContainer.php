<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEH7M4DY\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEH7M4DY/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEH7M4DY.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEH7M4DY\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEH7M4DY\App_KernelDevDebugContainer([
    'container.build_hash' => 'EH7M4DY',
    'container.build_id' => '08124a53',
    'container.build_time' => 1616604767,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEH7M4DY');
