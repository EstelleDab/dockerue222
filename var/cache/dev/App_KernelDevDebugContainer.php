<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxmSjDl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxmSjDl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZxmSjDl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZxmSjDl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZxmSjDl\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZxmSjDl',
    'container.build_id' => 'c33d717e',
    'container.build_time' => 1706347020,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxmSjDl');
