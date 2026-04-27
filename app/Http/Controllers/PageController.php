<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function prosesLogin(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');

        if(!$username){
            return back()->with('error', 'Username wajib diisi');
        }

        if(!$password){
            return back()->with('error', 'Password wajib diisi');
        }

        session(['username' => $username]);

        return redirect('/dashboard');
    }

    public function dashboard(){
        if (!session('username')) {
            return redirect('/login');
        }

        return view('dashboard');
    }

    public function pengelolaan(){
        if (!session('username')) {
            return redirect('/login');
        }

        $weapons = [
            [
                'nama' => 'Wooden Sword',
                'lokasi' => 'Starter Island',
                'gambar' => 'images/wooden-sword.webp',
                'cara' => [
                    'Starter weapon (default)'
                ]
            ],
            [
                'nama' => 'Katana',
                'lokasi' => 'Starter Island',
                'gambar' => 'images/Katana.webp',
                'cara' => [
                    'Buy from the Katana Seller for 2500 money'
                ]
            ],
            [
                'nama' => 'Dark Blade',
                'lokasi' => 'Snow Island',
                'gambar' => 'images/Dark-Blade.webp',
                'cara' => [
                    'Buy from the Dark Blade Seller',
                    '250,000 money',
                    '150 gems'
                ]
            ],
            [
                'nama' => 'Gryphon',
                'lokasi' => 'Shibuya Station',
                'gambar' => 'images/Gryphon.webp',
                'cara' => [
                    'Buy from Gryphon Seller NPC',
                    '650k money',
                    '650 gems'
                ]
            ],
            [
                'nama' => 'Excalibur (Saber)',
                'lokasi' => 'Boss Island',
                'gambar' => 'images/Excalibur.webp',
                'cara' => [
                    'Drop dari boss (2% chance)',
                    'Atau tukar 65 boss tickets'
                ]
            ],
            [
                'nama' => 'Solo Hunter (Jinwoo)',
                'lokasi' => 'Sailor Island',
                'gambar' => 'images/Solo-Hunter.webp',
                'cara' => [
                    'Complete Solo Hunter trainer quests',
                    '2.5M money'
                ]
            ],
            [
                'nama' => 'Slime (Rimuru)',
                'lokasi' => 'Slime Island',
                'gambar' => 'images/Slime.webp',
                'cara' => [
                    'Demon Lord title',
                    '30M money',
                    '20,000 gems',
                    '9x sage pulse',
                    '6x tempest seal',
                    '3x slime remnant',
                    '1x slime core'
                ]
            ],
            [
                'nama' => 'Manipulator Sword (Aizen)',
                'lokasi' => 'Hollow Island',
                'gambar' => 'images/Manipulator-Sword.webp',
                'cara' => [
                    'Complete Manipulator quests',
                    '6M money',
                    '10,000 gems',
                    '10 Mirage Pendants',
                    '6 Illusion Prisms',
                    '3x Reiatsu Cores',
                    '1x Ayoku fragment'
                ]
            ],
            [
                'nama' => 'True Manipulator (True Aizen)',
                'lokasi' => 'Soul Dominion',
                'gambar' => 'images/True-Manipulator.webp',
                'cara' => [
                    'Transcendent Being title',
                    'Aizen Sword required',
                    '1x Evolution Fragment',
                    '3x Transcendent Core',
                    '8x Divinity Essence',
                    '15x Fusion Ring',
                    '75x Chrysalis Sigil',
                    '35,000 Gems'
                ]
            ],
            [
                'nama' => 'Yamato (Mythical)',
                'lokasi' => 'Judgement Island',
                'gambar' => 'images/Yamato.webp',
                'cara' => [
                    'Blade Sovereign title',
                    'Soul Bless Race',
                    '1x Azure Heart',
                    '3x Silent Storms',
                    '7x Yamato Essence',
                    '14x Frozen Will',
                    '30,000 Gems'
                ]
            ],
            [
                'nama' => 'Sin of Pride (Escanor)',
                'lokasi' => 'Sailor Island',
                'gambar' => 'images/Sin-of-Pride.webp',
                'cara' => [
                    'Defeat boss (low chance drop)'
                ]
            ],
            [
                'nama' => 'Dragon Slayer (Ragna)',
                'lokasi' => 'Snow Island',
                'gambar' => 'images/Dragon-Slayer-Sword.webp',
                'cara' => [
                    '1M money',
                    '4500 gems',
                    '7x Wyrm brand',
                    '3x Black Forest',
                    '1x Silver Requiem'
                ]
            ],
            [
                'nama' => 'Soul Reaper (Ichigo)',
                'lokasi' => 'Hollow Island',
                'gambar' => 'images/Soul-Reaper.webp',
                'cara' => [
                    '5M money',
                    '8500 gems',
                    '2x Soul Flame',
                    '4x Spiritual Core',
                    '8x Soul Fragment'
                ]
            ],
            [
                'nama' => 'Shadow Sword',
                'lokasi' => 'Dungeon Island',
                'gambar' => 'images/Shadow.webp',
                'cara' => [
                    '10M money',
                    '15,000 gems',
                    '1x Atomic Core',
                    '4x Shadow Essence',
                    '8x Void Seed',
                    '20x Umbral Capsule'
                ]
            ],
            [
                'nama' => 'Shadow Monarch',
                'lokasi' => 'Dungeon Island',
                'gambar' => 'images/Shadow-Monarch-1.webp',
                'cara' => [
                    'King of Shadows title',
                    'Solo Hunter sword',
                    '10x Monarch Core',
                    '5x Monarch Essence',
                    '2x Kamish Dagger',
                    '1x Shadow Crystal'
                ]
            ],
            [
                'nama' => 'Atomic Sword',
                'lokasi' => 'Lawless Island',
                'gambar' => 'images/Atomic-Sword.webp',
                'cara' => [
                    'Eminence Incarnate title',
                    'Own Shadow sword',
                    '45,000 Gems',
                    '1x Atomic Omen',
                    '3x Eminence Essence',
                    '9x Shadow Remnant',
                    '16x Magic Shard',
                    '80x Abyss Sigil'
                ]
            ],
            [
                'nama' => 'Abyssal Empress',
                'lokasi' => 'Tower Island',
                'gambar' => 'images/Abyssal-Empress-Sword.webp',
                'cara' => [
                    'Infinite Tower drop',
                    'Atau Tower shop'
                ]
            ],
            [
                'nama' => 'Ice Queen',
                'lokasi' => 'Boss Island',
                'gambar' => 'images/Ice-Queen.webp',
                'cara' => [
                    'Frost Empress title',
                    '40,000 Gems',
                    '1x Ice Core',
                    '4x Frozen Band',
                    '9x Glacier Remnant',
                    '17x Battle Shard',
                    '25x Frost Relic'
                ]
            ],
            [
                'nama' => 'Dragon Goddess',
                'lokasi' => 'Sea Beasts',
                'gambar' => 'images/Dragon-Goddess.webp',
                'cara' => [
                    'Drop dari Sea Serpent & Kraken'
                ]
            ],
            [
                'nama' => 'Great Mage',
                'lokasi' => 'Easter Island',
                'gambar' => 'images/Great-Mage.webp',
                'cara' => [
                    'Ancient Mage title',
                    '500x Easter Egg',
                    '18x Spell Echo',
                    '10x Ancient Fragment',
                    '5x Magic Essence',
                    '1x Mana Core'
                ]
            ],
            [
                'nama' => 'Anti Magic',
                'lokasi' => 'Punch Island',
                'gambar' => 'images/Anti-Magic.webp',
                'cara' => [
                    'Crystal Defense drop',
                    'Atau shop (5K Crystal Coins)'
                ]
            ],
        ];

        return view('pengelolaan', compact('weapons'));
    }

    public function profile(){
    if (!session('username')) {
        return redirect('/login');
    }

    return view('profile');
}

    public function logout(){
        session()->forget('username');
        return redirect('/login');
    }
}
