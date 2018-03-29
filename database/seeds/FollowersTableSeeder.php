<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = $users->first();
        $user_id = $user->id;

        //获取除去ID=1的所有用户的ID数组
        $followers = $users->slice(1);
        $follower_ids = $followers->pluck('id')->toArray();

        //关注除去1以外的所有用户
        $user->follow($follower_ids);

        //除去1号以外的用户都来关注1
        foreach ($followers as $follower)
        {
            $follower->follow($user_id);
        }
    }
}
