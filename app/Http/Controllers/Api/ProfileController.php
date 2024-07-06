<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function updateuser(Request $request, User $user)
    {

        $validator = Validator::make($request->all(), [
            'phone_no' => 'sometimes|regex:/^(\+\d{1,3}[- ]?)?\d{10}$/',
            'address' => 'sometimes|string|max:255',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        if ($request->has('phone_no')) {
            $user->phone_no = $request->phone_no;
        }

        if ($request->has('address')) {
            $user->address = $request->address;
        }

        if ($request->hasFile('profile_image')) {
            if ($user->profile_image) {
                Storage::delete('public/profile_images/' . $user->profile_image);
            }

            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = basename($imagePath);
        }

        $user->save();

        return response()->json([
            'message' => 'User profile updated.',
            'user' => $user
        ], 200);
    }
}
