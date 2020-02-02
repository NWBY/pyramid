<?php

namespace NWBY\Pyramid;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Pyramid
{
    public function __construct()
    {
    }

    public function create(array $data)
    {
        if (Schema::hasTable('stacks')) {
            DB::table('stacks')->insert([
                'name' => $data['name'],
                'frontend' => $data['frontend'],
                'frontend_url' => $data['frontend_url'],
                'backend' => $data['backend'],
                'backend_url' => $data['backend_url'],
                'hosting' => $data['hosting'],
                'version_control' => $data['version_control'],
                'ui' => $data['ui'],
            ]);
        } else {
        }
    }

    public function getStack()
    {
        if (Schema::hasTable('stacks')) {
            $randomStack = DB::table('stacks')->inRandomOrder()->first();
            return $randomStack;
        }
    }

    public function getFiveStacks()
    {
        if (Schema::hasTable('stacks')) {
            $randomStacks = DB::table('stacks')->inRandomOrder()->take(5)->get();
            return $randomStacks;
        }
    }

    public function getTenStacks()
    {
        if (Schema::hasTable('stacks')) {
            $randomStacks = DB::table('stacks')->inRandomOrder()->take(10)->get();
            return $randomStacks;
        }
    }
}
