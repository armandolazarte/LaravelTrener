<?php

    namespace app\lib;
    use Auth;
    use App\Model\Words;
    use Intervention\Image\Facades\Image;
    use App\User;
/**
 * Created by PhpStorm.
 * User: goran
 * Date: 5.2.2016
 * Time: 8:21
 */

    class Costum {

        public function test()
        {
            return 'Dela, Kot morw';
        }


        public function passwordGenerate()
        {

            $geslo =  rand(1, 24493);
            $gesloBeseda = Words::findOrFail($geslo);
            $gesloBesedaSkupaj = $gesloBeseda->words.$geslo;

            return $gesloBeseda;
        }

        public function imageUpload($image)
        {
            $img = $image;
            $filename  = time() . '.' . $img->getClientOriginalExtension();
            $path = public_path('assets/users/' . $filename);


            Image::make($img->getRealPath())->resize(300, 300)->save($path);

            return  $filename;
        }

        public function insertUserUcenec($ime, $priimek, $email)
        {
            $user = User::where('email', '=', $email)->get();

            if(count($user) != 0)
            {
                return $user;
            }
            else
            {
                $geslo = $this->passwordGenerate();

                $user =  User::create([
                'name'      =>  $ime,
                'surname'   =>  $priimek,
                'status'    =>  1,
                'role_id'   =>  4,
                'email'     =>  $email,
                'words_id'  =>  $geslo['id'],
                'ucitelj_id' => 0,
                'password' => bcrypt($geslo['words'].$geslo['id']),
                ]);

                return $user;
            }

        }
    }