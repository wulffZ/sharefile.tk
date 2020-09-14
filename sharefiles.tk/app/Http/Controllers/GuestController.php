<?php

    namespace App\Http\Controllers;

    use App\File;
    use App\GuestCode;
    use App\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Str;
    use mysql_xdevapi\Exception;

    class GuestController extends Controller
    {
        public function show($code)
        {
            $guest_code_check = GuestCode::where('guest_code', $code)->first();
            if (!$guest_code_check) {
                abort(404);
            }
            $file = File::where('id', $guest_code_check->file_id)->first();
            $user = User::where('id', $file->user_id)->first();
            $file->userdata = $user;
            return view('fileViews.show', compact('file'));
        }

        public function generate($file_id) {
            $guest_code = new GuestCode();
            $guest_code->file_id = $file_id;
            $guest_code->user_id = Auth::id();
            $guest_code->guest_code = Str::random(5);
            $guest_code->save();

            return redirect("/guest/$guest_code->guest_code");
        }
    }
