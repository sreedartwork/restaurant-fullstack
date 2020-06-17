<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FoodItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //APPETIZERS 

        DB::table('food_items')->insert([
            'title' => 'Chicken Fried Ribs',
            'description' => 'Our smoked ribs taken to the next level. Double sided, thick cut ribs that are breaded, fried and served with our white BBQ sauce.',
            'image_url' => '/img/fried_ribs.png',
            // 'size' => 'Large',
            'price' => 13.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Texas Fries',
            'description' => 'Fries smothered in BBQ sauce, topped with chopped brisket or pulled pork, jalapeños and covered with melted cheese. Served with ranch.',
            'image_url' => '/img/texas_fries.png',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Fried Pickles, Jalapeno Chips or Half & Half',
            'description' => 'Soaked in buttermilk, breaded and fried. Served with ranch.',
            'image_url' => '/img/fried_pickles.png',
            // 'size' => 'Large',
            'price' => 7.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Lopez',
            'description' => 'Tots smothered in our Brisket Chili & topped with melted cheese.',
            'image_url' => '/img/the_lopez.png',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Basket of Fries',
            'description' => 'Tots smothered in our Brisket Chili & topped with melted cheese.',
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            // 'size' => 'Large',
            'price' => 6.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Jalapeno Cheddar Sausage and Pimento Cheese',
            'description' => 'A housemade pork and beef smoked sausage link, scoop of pimento cheese, pickles and saltine crackers.',
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            // 'size' => 'Large',
            'price' => 8.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
            ]);
        DB::table('food_items')->insert([
            'title' => 'The Tomminator',
            'description' => 'Tots smothered in our Brunswick Stew & topped with melted cheese.',
            'image_url' => '/img/the_tomminator.jpg',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Bowl of Brisket Chili',
            'description' => 'Topped with diced red onions and cheese.',
            'image_url' => '/img/chili.png',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 6,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Stuffed Jalapeño Poppers',
            'description' => 'Fresh jalapeños stuffed with our BBQ Pork and cream cheese and deep fried. Served with ranch.',
            'image_url' => '/img/jalepeno_poppers3.jpg',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 1,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        // Salads Below  

        DB::table('food_items')->insert([
            'title' => 'BBQ Salad',
            'description' => 'Mixed greens topped with your choice of      meat, sliced red onions, texas toast croutons, cucumber and tomatoes.',
            'image_url' => '/img/bbq_chicken_salad.png',
        // 'size' => 'Large',
            'price' => 11.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now() 
        ]);
        DB::table('food_items')->insert([
            'title' => 'House Salad',
            'description' => 'Mixed greens topped with your choice of meat, sliced red onions, texas toast croutons, cucumber and tomatoes.',
            'image_url' => '/img/Download-Salad-Transparent-PNG.png',
            // 'size' => 'Large',
            'price' => 7.00,
            'category_id' => 2,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        //Smoke Wings

        DB::table('food_items')->insert([
            'title' => '6 Smoked Wings',
            'description' => 'Hickory smoked jumbo wings tossed in our homemade wing sauce. Served with ranch or blue cheese.',
            'image_url' => '/img/smoked_wings.png',
            // 'size' => 'Large',
            'price' => 9.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => '12 Smoked Wings',
            'description' => 'Hickory smoked jumbo wings tossed in our homemade wing sauce. Served with ranch or blue cheese.',
            'image_url' => '/img/smoked_wings.png',
            // 'size' => 'Large',
            'price' => 16.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => '24 Smoked Wings',
            'description' => 'Hickory smoked jumbo wings tossed in our homemade wing sauce. Served with ranch or blue cheese.',
            'image_url' => '/img/smoked_wings.png',
            // 'size' => 'Large',
            'price' => 30.00,
            'category_id' => 3,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        
        
        // Sandwiches below


        DB::table('food_items')->insert([
            'title' => 'Pulled Pork Sandwich',
            'description' => 'Served on a buttered and toasted brioche bun with pickle.',
            'image_url' => '/img/Download-Cupcake-PNG-Transparent-Image-420x190.png',
            // 'size' => 'Large',
            'price' => 10.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Big Tex',
            'description' => 'Sliced Brisket with mustard, pickles and onions on Texas Toast.',
            'image_url' => '/img/the_big_tex.jpg',
            // 'size' => 'Large',
            'price' => 12.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Beef Brisket Sandwich',
            'description' => 'Served sliced or chopped on a buttered and toasted brioche bun with pickle.',
            'image_url' => '/img/Beef-Brisket-Sandwich-at-Big-Stuff-Smoked-BBQ-Berlin.jpg',
            // 'size' => 'Large',
            'price' => 12.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Texacutioner',
            'description' => 'Chopped brisket, our housemade and hickory smoked jalapeno cheddar sausage, mustard, onion pickles on a brioche bun.',
            'image_url' => '/img/Macs-BBQ1.jpg',
            // 'size' => 'Large',
            'price' => 12.00,
            'category_id' => 4,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
            DB::table('food_items')->insert([
                'title' => 'Rib Sandwich',
                'description' => 'St Louis rib on the bone served with two slices of white bread.',
                'image_url' => '/img/rib_sandwich.jpg',
                // 'size' => 'Large',
                'price' => 12.00,
                'category_id' => 4,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
            DB::table('food_items')->insert([
                'title' => 'Burger',
                'description' => 'Our take on a Burger. Chopped Brisket topped with bacon, tomato, red onion, pickles, melted pimento cheese and jalapeño mayo on a buttered, toasted brioche bun.',
                'image_url' => '/img/burger_chopped_brisket.jpg',
                // 'size' => 'Large',
                'price' => 13.00,
                'category_id' => 4,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
            DB::table('food_items')->insert([
                'title' => 'Smoked Chicken Salad Sandwich',
                'description' => 'Pulled smoked chicken, mayo, diced celery and white onion and a slice of tomato served on potato bread.',
                'image_url' => '/img/pulled_chicken_with_slaw.jpg',
                // 'size' => 'Large',
                'price' => 13.00,
                'category_id' => 4,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
            DB::table('food_items')->insert([
                'title' => 'Pimento Cheese Sandwich',
                'description' => 'Homemade pimento cheese served cold or griddled on potato bread.',
                'image_url' => '/img/pimento_cheese_sandwich.jpg',
                // 'size' => 'Large',
                'price' => 10.00,
                'category_id' => 4,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
            DB::table('food_items')->insert([
                'title' => 'Smoked Portabello Sandwich',
                'description' => 'Smoked portabello mushroom on a brioche bun topped with melted pimento cheese, jalapeño mayo, red onion, lettuce & tomato.',
                'image_url' => '/img/smoked_portabello_sandwich.jpg',
                // 'size' => 'Large',
                'price' => 11.00,
                'category_id' => 4,
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);


// Plates below


        DB::table('food_items')->insert([
            'title' => 'Pulled Pork Plate',
            'description' => 'Choose three meat portions: sausage / chicken salad / pulled pork / beef brisket (chopped / sliced) / 1/4 chicken* / ribs / 4 wings.',
            'image_url' => '/img/pulled_pork_plate.jpg',
            // 'size' => 'Large',
            'price' => 14.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Beef Brisket Plate',
            'description' => 'Sliced or chopped.',
            'image_url' => '/img/beef_brisket_plate.jpg',
            // 'size' => 'Large',
            'price' => 17.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Smoked Chicken Plate',
            'description' => 'A half smoked chicken.',
            'image_url' => '/img/smoked_chicken_plate.png',
            // 'size' => 'Large',
            'price' => 14.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Combo Plate (2 MEATS)',
            'description' => 'Choose two meat portions: sausage / chicken salad / pulled pork / beef brisket (chopped / sliced) / 1/4 chicken* / ribs / 4 wings.',
            'image_url' => '/img/combo_plate.jpg',
            // 'size' => 'Large',
            'price' => 19.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The BC Plate (3 MEATS)',
            'description' => 'Choose three meat portions: sausage / chicken salad / pulled pork / beef brisket (chopped / sliced) / 1/4 chicken* / ribs / 4 wings.',
            'image_url' => '/img/the_bc_plate(3 MEATS).jpg',
            // 'size' => 'Large',
            'price' => 26.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'The Everything Plate (4 MEATS)',
            'description' => 'Choose two meat portions: sausage / chicken salad / pulled pork / beef brisket (chopped / sliced) / 1/4 chicken* / ribs / 4 wings.',
            'image_url' => '/img/the_everything_plate.png',
            // 'size' => 'Large',
            'price' => 30.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


// Rib Plate

        DB::table('food_items')->insert([
            'title' => 'Half Rack Plate',
            'description' => '9-inch, bone in beef rib with our salt and pepper rub.',
            'image_url' => '/img/half_rack_plate.png',
            // 'size' => 'Large',
            'price' => 20.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Whole Rack Plate',
            'description' => '9-inch, bone in beef rib with our salt and pepper rub.',
            'image_url' => '/img/rib_plate.png',
            // 'size' => 'Large',
            'price' => 30.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Rib Combo',
            'description' => '½ rack of ribs & one portion of another meat.',
            'image_url' => '/img/rib_combo.jpg',
            // 'size' => 'Large',
            'price' => 26.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Beef Short Rib',
            'description' => '9-inch, bone in beef rib with our salt and pepper rub.',
            'image_url' => '/img/beef_short_rib.png',
            // 'size' => 'Large',
            'price' => 38.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Veggie Plate',
            'description' => 'Choose four of our sides.',
            'image_url' => '/img/veggie_plate.png',
            // 'size' => 'Large',
            'price' => 14.00,
            'category_id' => 5,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);


        //DESSERTS
        DB::table('food_items')->insert([
            'title' => 'Homemade Banana Pudding',
            'description' => 'Banana Pudding—layers of Nilla wafers, bananas and homemade vanilla pudding with a generous amount of whipped cream on top.',
            'image_url' => '/img/homemade_banana_pudding.png',
            'price' => 5.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Red Velvet Cheesecake',
            'description' => 'Homemade red velvet cake, filled with cheesecake, topped with cream cheese frosting.',
            'image_url' => '/img/red_velvet_cheese_cake.png',
            'price' => 5.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Chocolate Pecan Pie',
            'description' => 'What is a Chocolate Pecan Pie? This recipe is based on a classic "Derby Pie" recipe, which is a chocolate and pecan tart with a pastry crust, originated at the Melrose Inn in Kentucky.',
            'image_url' => '/img/peacan_pie.png',
            'price' => 5.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Dr Pepper Chocolate Cake',
            'description' => ' Dr Pepper fans, this Dr Pepper Chocolate Cake is for you! With Dr Pepper in both the cake itself and the fudgy icing, it brings a wonderful little hint of cherry to the cake ... just like in every sip of Dr Pepper itself.',
            'image_url' => '/img/chocolate_cake.png',
            'price' => 6.00,
            'category_id' => 7,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);



        //DRINKS
        DB::table('food_items')->insert([
            'title' => 'Coke',
            'description' => "Keep the whole group hydrated at your next event with this flavorful Coca Cola Soda. It's available in a convenient 24 count of 12 fl oz cans for plenty to go around.",
            'image_url' => '/img/coca_cola.png',
            'price' => 2.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);
        DB::table('food_items')->insert([
            'title' => 'Sprite',
            'description' => 'The lemon-lime soda that started it all—classic, cool, crisp citrus taste that’s caffeine-free with 100% natural flavors. Buy Sprite online or find in a store near you today! Sprite is a colorless soft drink with delicious lemon-lime flavor.',
            'image_url' => '/img/sprite.png',
            'price' => 2.99,
            'category_id' => 8,
            'updated_at' => Carbon::now(), 
            'created_at' => Carbon::now()
        ]);


        // DB::table('food_items')->insert([
        //     'title' => 'Greygoose Shot',
        //     'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
        //     'image_url' => '/img/Download-Salad-Transparent-PNG.png',
        //     'price' => 7.99,
        //     'category_id' => 8,
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);
        // DB::table('food_items')->insert([
        //     'title' => 'Hennesy Shot',
        //     'description' => 'Charbroiled Black Angus Beef Patty, Two Slices of American Cheese, Two Slices, Mayonnaise and Ketchup Wrapped in Fresh Iceberg Whole-Leaf Lettuce',
        //     'image_url' => '/img/Download-Salad-Transparent-PNG.png',
        //     'price' => 7.99,
        //     'category_id' => 8,
        //     'updated_at' => Carbon::now(), 
        //     'created_at' => Carbon::now()
        // ]);

    }
}
