<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOQKPTWT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOQKPTWT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOQKPTWT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOQKPTWT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOQKPTWT\App_KernelDevDebugContainer([
    'container.build_hash' => 'OQKPTWT',
    'container.build_id' => 'a1c4f39d',
    'container.build_time' => 1610031622,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOQKPTWT');