<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCBmYBmE\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCBmYBmE/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCBmYBmE.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCBmYBmE\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCBmYBmE\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CBmYBmE',
    'container.build_id' => '037c871d',
    'container.build_time' => 1559142213,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCBmYBmE');
