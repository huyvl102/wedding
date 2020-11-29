<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $name)
    {
        switch ($name) {
            case 1:
                $text = 'Bạn Việt Anh và <BR> Em Trung Anh';
                break;
            case 2:
                $text = 'Bạn Kiên và <BR> Em Cường';
                break;
            case 3:
                $text = 'Bạn Thịnh';
                break;
            case 4:
                $text = 'Bạn Ngọc';
                break;
            case 5:
                $text = 'Anh Hùng';
                break;
            case 6:
                $text = 'Bạn Hương';
                break;
            case 7:
                $text = 'Bạn Vy & Phú';
                break;
            default:
                $text = 'Mỹ Linh';
        }

        $data = array(
            'id' => $id,
            'name' => $text
        );

        return view('home', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
