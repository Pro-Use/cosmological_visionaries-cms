<?php

Kirby::plugin('10pm/gltf-file', [
    'fileTypes' => [
        'glb' => [
          'mime' => ' model/gltf-binary',
          'type' => 'image',
        ]
    ]
]);