<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\Category::factory()->create(['name'=>'Informatica']); 1
        // \App\Models\Category::factory()->create(['name'=>'Telefoni']); 2
        // \App\Models\Category::factory()->create(['name'=>'Auto']); 3
        // \App\Models\Category::factory()->create(['name'=>'Arredamento']); 4
        // \App\Models\Category::factory()->create(['name'=>'Lavoro']); 5
        // \App\Models\Category::factory()->create(['name'=>'Immobili']); 6
        // \App\Models\Category::factory()->create(['name'=>'Elettrodomestici']); 7
        // \App\Models\Category::factory()->create(['name'=>'Musica']); 8
        // \App\Models\Category::factory()->create(['name'=>'Accessori']); 9
        // \App\Models\Category::factory()->create(['name'=>'Giochi']); 10
        // \App\Models\Category::factory()->create(['name'=>'Sport']); 11
        // \App\Models\Category::factory()->create(['name'=>'Manga']); 12




        \App\Models\Announcement::factory()->create([
            'title'=>'PC Desktop Gaming',
            'body'=>'Potente PC desktop adatto per il gaming e la produttività',
            'price'=>'1200',
            'category_id'=>1, 
            
        ]);

        \App\Models\Image::factory()->create([
            'path' => 'factory/img/pc.jpg',
            'announcement_id' => 1
        ]);
        
        \App\Models\Announcement::factory()->create([
            'title'=>'iphone 15 pro max',
            'body'=>"Potente, innovativo ad un prezzo competitivo.",
            'price'=>'1349',
            'category_id'=>2,
        ]);

        \App\Models\Image::factory()->create([
            'path' => 'factory/img/iphone.jpeg',
            'announcement_id' => 2
        ]);

        \App\Models\Announcement::factory()->create([
            'title' => 'Fiat 500X Lounge',
            'body' => 'Fiat 500X Lounge, un\'auto compatta e versatile perfetta per la città e i viaggi fuori porta. Dotata di tecnologia all\'avanguardia e design accattivante.',
            'price' => '15000',
            'category_id' => 3,
        ]);

        \App\Models\Image::factory()->create([
            'path' => 'factory/img/Fiat500.jpg',
            'announcement_id' => 3
        ]);

        \App\Models\Announcement::factory()->create([
            'title' => 'Divano Moderno a Tre Posti',
            'body' => 'Divano moderno a tre posti, perfetto per arredare il soggiorno con stile e comfort. Realizzato con materiali di alta qualità e design contemporaneo.',
            'price' => '1200',
            'category_id' => 4, 
        ]);

        \App\Models\Image::factory()->create([
            'path' => 'factory/img/Divano.jpg',
            'announcement_id' => 4
        ]);

        \App\Models\Announcement::factory()->create([
            'title' => 'Trapano a Percussione Bosch',
            'body' => 'Trapano a percussione Bosch, potente e affidabile, perfetto per lavori di falegnameria e montaggio. Dotato di funzione di percussione per forare su materiali duri e di vari accessori.',
            'price' => '150',
            'category_id' => 5,
        ]);

        \App\Models\Image::factory()->create([
            'path' => 'factory/img/Trapano.jpg',
            'announcement_id' => 5
        ]);

        // \App\Models\Announcement::factory()->create([
        //     'title' => 'Appartamento Moderno con Vista Panoramica',
        //     'body' => 'Appartamento moderno situato nel cuore della città, con una vista panoramica mozzafiato. Completamente arredato e dotato di ogni comfort, inclusi elettrodomestici di alta gamma.',
        //     'price' => '200000',
        //     'category_id' => 6, 
        // ]);

    
// errore
        // \App\Models\Announcement::factory()->create([
        //     'title' => 'Lavatrice e Asciugatrice LG',
        //     'body' => "Lavatrice e asciugatrice LG, il duo perfetto per il lavaggio e l'asciugatura efficienti dei tuoi indumenti. Dotati di tecnologia avanzata per prestazioni ottimali e risparmio energetico.",
        //     'price' => '1200',
        //     'category_id' => 7,
        // ]);


        // \App\Models\Image::factory()->create([
        //     'path' => 'factory/img/Lavatrice.jpg',
        //     'announcement_id' => 7
        // ]);


        // \App\Models\Announcement::factory()->create([
        //     'title' => 'Chitarra Acustica Martin',
        //     'body' => 'Chitarra acustica Martin, costruita con materiali di alta qualità per un suono ricco e caldo. Perfetta per esibizioni dal vivo o sessioni di registrazione in studio.',
        //     'price' => '1500',
        //     'category_id' => 8, 
        // ]);

        // \App\Models\Image::factory()->create([
        //     'path' => 'factory/img/Chitarra.jpg',
        //     'announcement_id' => 8
        // ]);
// errore 

        // \App\Models\Announcement::factory()->create([
        //     'title'=>'Orologio uomo',
        //     'body'=>'Tommy Hilfiger Analogue Quartz Watch for Men, Stainless Steel',
        //     'price'=>'170',
        //     'category_id'=>9,
        // ]);


        
        // \App\Models\Announcement::factory()->create([
        //     'title' => 'PlayStation 5',
        //     'body' => "La nuova PlayStation 5, con grafica ad alta definizione e velocità di caricamento ultra rapida. Vivi un'esperienza di gioco coinvolgente e immersiva con i migliori titoli disponibili.",
        //     'price' => '500',
        //     'category_id' => 10,
        // ]);

        // \App\Models\Image::factory()->create([
        //     'path' => 'factory/img/PlayStation5.jpg',
        //     'announcement_id' => 10
        // ]);
        

        // \App\Models\Announcement::factory()->create([
        //     'title'=>'Pesi palestra',
        //     'body'=>'Athlyt - Set di manubri rivestiti in neoprene',
        //     'price'=>'40',
        //     'category_id'=>11,
        // ]);


        // \App\Models\Announcement::factory()->create([
        //     'title' => 'One Piece Volume 100',
        //     'body' => 'Il volume 100 del celebre manga "One Piece", con nuovi capitoli emozionanti e avvincenti. Un must-have per ogni fan della serie!',
        //     'price' => '20',
        //     'category_id' => 12,
        // ]);
        
        

        





        

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
