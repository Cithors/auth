<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8te5nus\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8te5nus/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8te5nus.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8te5nus\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container8te5nus\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '8te5nus',
    'container.build_id' => 'ad21060a',
    'container.build_time' => 1559726010,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8te5nus');
