CREATE TABLE register_info (
    fname VARCHAR(20),
    lname VARCHAR(20),
    mob VARCHAR(20),
    mail VARCHAR(50) PRIMARY KEY,
    pass VARCHAR(20)
);

INSERT INTO register_info (fname, lname, mob, mail, pass) VALUES ('shareef', 'shaik', '1234567890', 'sks@gmail.com', '123');

-- Create the orders table
CREATE TABLE orders (
    item_name VARCHAR(100),
    amount VARCHAR(10),
    image VARCHAR(300)
);

-- Insert data into the orders table
INSERT INTO orders (item_name, amount, image) VALUES
('kakori_kebabas', '400', 'https://i.ndtvimg.com/i/2018-01/kakori-kebab_620x330_41514982101.jpg'),
('baked_chicken_skeeh', '300', 'https://i.ndtvimg.com/i/2017-11/baked-chicken-seekh-recipe_650x420_61510052874.jpg'),
('samosa', '100', 'https://c.ndtvimg.com/2018-09/dii51dt8_moong-dal-samosa_625x300_10_September_18.jpg'),
('aloo_bonda', '100', 'https://i.ndtvimg.com/i/2017-07/bonda_620x330_71499946172.jpg'),
('cheese_chicken_kebabas', '250', 'https://i.ndtvimg.com/i/2014-12/chicken-kebab_625x300_41419060325.jpg'),
('microware_panner_tikka', '300', 'https://i.ndtvimg.com/i/2017-12/paneer-tikka_650x400_61512457125.jpg'),
('kassar_mango_lassi', '50', 'https://c.ndtvimg.com/2022-05/8j1tcds_mango-lassi_120x90_02_May_22.jpg'),
('mint_gur_sharbat', '100', 'https://c.ndtvimg.com/2022-04/ok1qn3g8_mint-sharbat_120x90_19_April_22.jpg'),
('komal_gujrat_chass', '50', 'https://c.ndtvimg.com/2021-03/kchf55dg_chaas_240x180_26_March_21.jpg'),
('strawberry_thandi', '150', 'https://c.ndtvimg.com/2022-03/ssumhqvo_thandai-_120x90_15_March_22.jpg'),
('kesar_thandi', '100', 'https://c.ndtvimg.com/2022-03/ng5pj91g_thandai_120x90_14_March_22.jpg'),
('cardamom_thandi', '100', 'https://c.ndtvimg.com/2022-03/gbjlmj6_thandai_120x90_15_March_22.jpg'),
('apple_pie', '150', 'https://i.ndtvimg.com/i/2015-09/apple-pie-ice-cream-625_625x350_81443595158.jpg'),
('almond_malai_kulfy', '200', 'https://i.ndtvimg.com/i/2015-09/almond-kulfi-625_625x350_61443596643.jpg'),
('hot_cointreau_suffle', '200', 'https://i.ndtvimg.com/i/2015-09/cointreau-souffle-625_625x350_71443596904.jpg'),
('lemon_tart', '150', 'https://i.ndtvimg.com/i/2015-09/lemon-tart-625_625x350_61443595187.jpg'),
('pistachi_phirni', '200', 'https://i.ndtvimg.com/i/2015-09/pistachio-phirni-625_625x350_81443596823.jpg'),
('chocolate_brownies', '250', 'https://i.ndtvimg.com/i/2015-09/chocolate-brownies-625_625x350_81443599634.jpg'),
('panner_soup', '250', 'https://www.eatthis.com/wp-content/uploads/sites/4/2019/08/panera-broccoli-cheddar-soup.jpg?resize=640,468&quality=82&strip=all'),
('crispy_chicken', '250', 'https://www.eatthis.com/wp-content/uploads/sites/4/2018/08/kfc-chicken-tenders.jpg?resize=640,468&quality=82&strip=all'),
('five_guys_fries', '150', 'https://www.eatthis.com/wp-content/uploads/sites/4/media/images/ext/695110956/five-guys-fries.jpg?resize=640,468&quality=82&strip=all'),
('wendys_baked_potato', '150', 'https://www.eatthis.com/wp-content/uploads/sites/4/2019/05/wendys-baked-potato.jpg?resize=640,468&quality=82&strip=all'),
('chicken_fries', '300', 'https://www.eatthis.com/wp-content/uploads/sites/4/2015/11/burger-king-chicken-fries-facebook.jpg?resize=640,468&quality=82&strip=all'),
('dunkin_munchkins', '200', 'https://www.eatthis.com/wp-content/uploads/sites/4/2019/02/dunkin-donuts-munchkins.jpg?resize=640,468&quality=82&strip=all'),
('kashmir_rogan_josh', '500', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/rogan-josh_5d3037b27b7b4.jpg'),
('tamil_nadu_pongal', '300', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/pongal.jpg'),
('telangana_biryani', '400', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/biryani.jpg'),
('goa_fish_curry', '300', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/fish-curry.jpg'),
('west_bengal_kosha_mangsho', '500', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/kosha-mangsho_5d3036c936254.jpg'),
('gujrat_dhokla', '350', 'https://www.outlookindia.com/outlooktraveller/public/uploads/filemanager/images/dhokla.jpg');

