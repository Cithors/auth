<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDXJQxaB\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDXJQxaB/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDXJQxaB.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDXJQxaB\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerDXJQxaB\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'DXJQxaB',
    'container.build_id' => '36b2ebae',
    'container.build_time' => 1559131472,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDXJQxaB');
