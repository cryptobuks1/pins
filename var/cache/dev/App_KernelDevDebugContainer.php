<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerML1re1N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerML1re1N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerML1re1N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerML1re1N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerML1re1N\App_KernelDevDebugContainer([
    'container.build_hash' => 'ML1re1N',
    'container.build_id' => 'bf001ea5',
    'container.build_time' => 1604838076,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerML1re1N');