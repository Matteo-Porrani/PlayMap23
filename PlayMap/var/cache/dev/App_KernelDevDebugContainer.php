<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG4ZRaD2\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG4ZRaD2/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG4ZRaD2.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG4ZRaD2\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG4ZRaD2\App_KernelDevDebugContainer([
    'container.build_hash' => 'G4ZRaD2',
    'container.build_id' => 'ee1c232f',
    'container.build_time' => 1616427710,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG4ZRaD2');
