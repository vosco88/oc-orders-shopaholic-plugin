<?php return [
    'plugin'               => [
        'name'        => 'Orders for Shopaholic',
        'description' => 'Nákupný košík a tvorba objednávky',
    ],
    'component'            => [
        'cart_name'                       => 'Nákupný košík',
        'cart_description'                => '',
        'make_order_name'                 => 'Tvorba objednávky',
        'make_order_description'          => 'Tvorba novej objednávky',
        'payment_method_list_name'        => 'Platobné metódy',
        'payment_method_list_description' => '',
        'shipping_type_list_name'         => 'Typy dopravy',
        'shipping_type_list_description'  => '',
        'status_list_name'                => 'Statusy objednávky',
        'status_list_description'         => '',
        'order_page_name'                 => 'Stránka objednávky',
        'order_page_description'          => '',
        'send_payment_purchase'           => 'Poslať platbu po vytvorení objednávky',
        'user_address_name'               => 'Adresa používateľa',
        'user_address_description'        => 'Vytvoriť/aktualizovať/zmazať',
    ],
    'tab'                  => [
        'info'             => 'Objednávka',
        'offers_info'      => 'Zoznam ponúuk',
        'order_settings'   => 'Objednávka a košík',
        'gateway'          => 'Platobná brána',
        'payment_data'     => 'Dáta platby',
        'discount_info'    => 'Zľavy',
        'billing_address'  => 'Fakturačná adresa',
        'shipping_address' => 'Dodacia adresa',
        'tasks'            => 'Úlohy',
    ],
    'message'              => [
        'empty_cart'           => 'Košík je prázdny',
        'offer_not_found'      => 'Ponuka nebola nájdená',
        'insufficient_amount'  => 'Ponuka nie je dostupná',
        'order_id_required'    => 'Vzťah medzi pozíciou a objednávkou je požadovaný',
        'cart_id_required'     => 'Vzťah medzi pozíciou a košíkom je požadovaný',
        'item_required'        => 'Vzťah medzi pozíciou a položkou je požadovaný',
        'without_condition'    => 'Bez podmienky',
        'discount_not_applied' => 'Zľava sa nepoužila',
    ],
    'field'                => [
        'status'       => 'Status',
        'order_number' => 'Číslo objednávky',
        'user'         => 'Zákazník',

        'new'         => 'Nová',
        'canceled'    => 'Zrušená',
        'complete'    => 'Vybavená',
        'in_progress' => 'Prebieha',

        'total_price'                    => 'Celková cena',
        'old_total_price'                => 'Stará celková cena',
        'position_price'                 => 'Cena pozície',
        'old_position_price'             => 'Stará cena pozície',
        'shipping_price'                 => 'Cena dopravy',
        'catalog_price'                  => 'Súčasná cena',
        'offer_list'                     => 'Zoznam ponúk',
        'position_total_price'           => 'Celková cena pozícií objednávky',
        'shipping_type'                  => 'Typ dopravy',
        'payment_method'                 => 'Platobná metóda',
        'is_user_show'                   => 'Zobraziť status používateľovi',
        'user_status'                    => 'Statu bude používateľom zobrazený ako',
        'gateway_id'                     => 'Platobná brána',
        'gateway_currency'               => 'Mena brány',
        'before_status_id'               => 'Status objednávky pred platbou',
        'after_status_id'                => 'Status objednávky po úspešnej platbe',
        'cancel_status_id'               => 'Status objednávky po zrušenej platbe',
        'fail_status_id'                 => 'Status objednávky po zlyhaní/chybe platby',
        'transaction_id'                 => 'ID transakcie',
        'payment_token'                  => 'Token platby',
        'payment_data'                   => 'Dáta, ktoré boli odoslané platobnej bráne',
        'payment_response'               => 'Dáta, ktoré boli prijaté od platobnej brány',
        'send_purchase_request'          => 'Poslať požiadavku platobnej bráne, pri vytváraní objednávky',
        'gateway_field_value'            => 'Získať hodnotu poľa ":field" z hodnoty poľa vlastnosti objednávky',
        'promo_mechanism'                => 'Promo mechanizmus',
        'priority_description'           => '<strong>Väčšia</strong> priorita znamená, že zľava bude uplatnená <strong>skôr</strong>.',
        'discount_value'                 => 'Hodnota zľavy',
        'discount_type'                  => 'Typ zľavy,
        'discount_type_fixed'            => 'Fixná',
        'discount_type_percent'          => 'Percentuálna',
        'final_discount'                 => 'Finálna zľava',
        'final_discount_description'     => 'Finálna zľava <strong>blokuje efekty</strong> ostatných zliav s nižšou prioritou. V opačnom prípade zľavy s <strong>nižšou</strong> prioritou budú <strong>aplikované</strong>.',
        'order_discount_list'            => 'Zoznam dostupných zliav',
        'manager'                        => 'Manažér',
        'task_date'                      => 'Dátum upozornenia',
        'active_task'                    => 'Aktívne úlohy',
        'completed_task'                 => 'Dokončené úlohy',
        'task_mail_template'             => 'Šablóna emailu pre upozornenia',
        'task_mail_template_description' => 'Ak nie je zvolená šablóna emailu, upozornenia nebudú odosielané.',
        'notification_sent'              => 'Upozornenie odoslané',

        'order_discount_log_position_total_price' => 'Zoznam aplikovaných zliav (celková cena pozície)',
        'order_discount_log_sipping_price'        => 'Zoznam aplikovaných zliav (cena dopravy)',
        'order_discount_log_total_price'          => 'Zoznam aplikovaných zliav (celková cena objednávky)',

        'name'        => 'Meno',
        'last_name'   => 'Priezvisko',
        'middle_name' => 'Stredné meno',
    ],
    'settings'             => [
        'cart_cookie_lifetime'                 => 'Životnosť ID nákupného košíka v cookies (min.)',
        'check_offer_quantity'                 => 'Skontrolovať dostupné množstvo produktov pri vytváraní objednávky',
        'decrement_offer_quantity'             => 'Automaticky redukovať dostupné množstvo ponúk pri vytváraní objednávky',
        'create_new_user'                      => 'Automaticky vytvoriť nového používateľa pri vytváraní objednávky',
        'generate_fake_email'                  => 'Ak je pole pre email prázdne pri vytváraní používateľa, vygeneruje falošný email',
        'send_email_after_creating_order'      => 'Odoslať email po vytvorení objednávky',
        'creating_order_mail_template'         => 'Mailová šablóna vytvorenia objednávky (pre používateľov)',
        'creating_order_manager_mail_template' => 'Mailová šablóna vytvorenia objednávky (pre manažérov)',
        'creating_order_manager_email_list'    => 'Managers email list',

        'order_create_email' => 'Email pre posielanie správy pri tvorbe objednávky',
    ],
    'menu'                 => [
        'orders'                  => 'Objednávky',
        'statuses'                => 'Statusy',
        'payment_methods'         => 'Platobné metódy',
        'shipping_types'          => 'Typy dopravy',
        'order_property'          => 'Ďalšie vlastnosti objednávky',
        'order_position_property' => 'Ďalšie vlastnosti pozície objednávky',
        'promo_mechanism'         => 'Promo mechanizmus',
    ],
    'order'                => [
        'name'       => 'objednávka',
        'list_title' => 'Zoznam objednávok',
    ],
    'buyer'                => [
        'name'       => 'Zákazník',
        'list_title' => 'Zoznam zákazníkov',
    ],
    'order_position'       => [
        'name'       => 'pozícia',
        'list_title' => 'Zoznam pozícií',
    ],
    'status'               => [
        'name'       => 'status',
        'list_title' => 'Zoznam statusov',
    ],
    'payment_method'       => [
        'name'       => 'platobná metóda',
        'list_title' => 'Platobné metódy',
    ],
    'shipping_type'        => [
        'name'       => 'typ dopravy',
        'list_title' => 'Typy dopravy',
    ],
    'order_property'       => [
        'name'       => 'vlastnosti',
        'list_title' => 'Zoznam vlastností',
    ],
    'task'                 => [
        'name'       => 'úlohy',
        'list_title' => 'Zoznam úloh',
    ],
    'promo_mechanism'      => [
        'name'                            => 'promo mechanizmus',
        'list_title'                      => 'zoznam promo mechanizmov',
        'amount_description'              => 'Zľava bude aplikovaná ak je množstvo väčšie alebo rovné ako',
        'offer_limit'                     => 'Množstvo ponuky, pri ktorom bude zľava aplikovaná',
        'offer_limit_description'         => 'Zľava bude aplikovaná ak je množstvo ponuky väčšie alebo rovné ako',
        'position_limit'                  => 'Počet pozícií, pri ktorom bude zľava aplikovaná',
        'position_limit_description'      => 'Zľava bude aplikovaná ak je počet pozícií väčší alebo rovný ako',
        'quantity_limit'                  => 'Limit množstva, pre ktoré bude zľava aplikovaná',
        'quantity_limit_description'      => 'Ak nastavíte hodnotu = 1 a hodnotu zľavy = 100% zľava bude aplikovaná na jednu jednotku. Ak nastavíte hodnotu = 0, zľava bude aplikovaná na všetky jednotky',
        'quantity_limit_from'             => 'Limit množstva, pri ktorom bude zľava aplikovaná',
        'quantity_limit_from_description' => 'Ak nastavíte hodnotu = 3, hodnota limitu množstva, pre ktoré bude zľava aplikovaná = 1 a hodnota zľavy = 100%, potom táto zľava bude aplikovaní na jednu jednotku a bude zopakovaná každé 3 ponuky (3 za cenu 2). Ak nastavíte hodnotu = 0, potom je hodnota ignorovaná.',
    ],
    'permission'           => [
        'order'           => 'Správa objednávok',
        'status'          => 'Správa zoznamu statusov',
        'payment_type'    => 'Správa platobných metód',
        'delivery_type'   => 'Správa typov dopravy',
        'property'        => 'Správa ďalšíich vlastností objednávky',
        'promo_mechanism' => 'Správa promo mechanizmov',
    ],
    'label'                => [
        'order'   => 'Objednávka',
        'product' => 'Produkt',
        'offer'   => 'Ponuka',
    ],
    'promo_mechanism_type' => [
        'without_condition_discount_position'                         => 'Zľava na <strong>cenu pozície</strong> bez podmienok',
        'without_condition_discount_position_description'             => 'Zľava na cenu <strong>pozície</strong> bude aplikovaná <strong>bez kontroly akýchkoľvek podmienok</strong>. Napríklad: Môže byť použitá pri aplikácií kupónu.',
        'without_condition_discount_min_price'                        => 'Zľava na <strong>cenu pozície s min cenou</strong> bez podmienok',
        'without_condition_discount_min_price_description'            => 'Zľava na cenu <strong>pozície s min cenou</strong> bude aplikovaná <strong>bez kontroly akýchkoľvek podmienok</strong>. Napríklad: Môže byť použitá pri aplikácií kupónu.',
        'without_condition_discount_position_total_price'             => 'Zľava na <strong>celkovú cenu</strong> pozícií bez podmienok',
        'without_condition_discount_position_total_price_description' => 'Zľava na <strong>celkovú cenu pozícií</strong> bude aplikovaná <strong>bez kontroly akýchkoľvek podmienok</strong>. Napríklad: Môže byť použitá pri aplikácií kupónu.',
        'without_condition_discount_shipping_price'                   => 'Zľava na <strong>cenu dopravy</strong> bez podmienok',
        'without_condition_discount_shipping_price_description'       => 'Zľava na <strong>cenu dopravy</strong> bude aplikovaná <strong>bez kontroly akýchkoľvek podmienok</strong>. Napríklad: Môže byť použitá pri aplikácií kupónu.',
        'without_condition_discount_total_price'                      => 'Zľava na <strong>celkovú cenu</strong> objednávky bez podmienok',
        'without_condition_discount_total_price_description'          => 'Zľava na <strong>celkovú cenu</strong> objednávky bude aplikovaná <strong>bez kontroly akýchkoľvek podmienok</strong>. Napríklad: Môže byť použitá pri aplikácií kupónu.',

        'position_total_price_greater_discount_shipping_price'             => 'Zľava na <strong>cenu dopravy</strong> ak je celková cena pozície väčšia ako "XX"',
        'position_total_price_greater_discount_shipping_price_description' => 'Zľava na <strong>cenu dopravy</strong> bude aplikovaná <strong>ak je celková cena pozície väčšia ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celková cena pozície je >= 50$.',
        'position_total_price_greater_discount_total_price'                => 'Zľava na <strong>celkovú cenu</strong> objednávky ak je celková cena pozície väčšia ako "XX"',
        'position_total_price_greater_discount_total_price_description'    => 'Zľava na <strong>celkovú cenu</strong> objednávky bude aplikovaná <strong>ak je celková cena pozície väčšia ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celková cena pozície je >= 50$.',

        'offer_quantity_greater_discount_position'                         => 'Zľava na <strong>cenu pozície</strong> ak celkové množstvo jednej ponuky z objednávky je väčšie ako "XX"',
        'offer_quantity_greater_discount_position_description'             => 'Zľava na cenu <strong>pozície</strong> bude aplikovaná <strong> ak celkové množstvo jednej ponuky v objednávke je väčšie ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celkové množstvo ponuky "Tričko veľkosť 52" je >= 3.',
        'offer_quantity_greater_discount_min_price'                        => 'Zľava na <strong>pozíciu s min cenou</strong> ak celkové množstvo jednej ponuky z objednávky je väčšie ako "XX"',
        'offer_quantity_greater_discount_min_price_description'            => 'Zľava na cenu <strong>pozície s min cenou</strong> bude aplikovaná <strong> ak celkové množstvo jednej ponuky v objednávke je väčšie ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celkové množstvo ponuky "Tričko veľkosť 52" je >= 3.',
        'offer_quantity_greater_discount_position_total_price'             => 'Zľava na <strong>celkovú cenu pozícií</strong> ak je celkové množstvo jednej ponuky v objednávke väčšie ako "XX"',
        'offer_quantity_greater_discount_position_total_price_description' => 'Zľava na <strong>celkovú cenu pozícií</strong> bude aplikovaná <strong>ak je celkové množstvo jednej ponuky v objednávke väčšie ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celkové množstvo ponuky "T-shirt size 52" je >= 3.',
        'offer_quantity_greater_discount_shipping_price'                   => 'Zľava na <strong>cenu dopravy</strong> ak je celkové množstvo jednej ponuky v objednávke väčšie ako "XX"',
        'offer_quantity_greater_discount_shipping_price_description'       => 'Zľava na <strong>cenu dopravy</strong> bude aplikovaná <strong>ak je celkové množstvo jednej ponuky v objednávke väčšie ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celkové množstvo ponuky "T-shirt size 52" je >= 3.',
        'offer_quantity_greater_discount_total_price'                      => 'Zľava na <strong>celkovú cenu objednávky</strong> ak je celkové množstvo jednej ponuky v objednávke väčšie ako "XX"',
        'offer_quantity_greater_discount_total_price_description'          => 'Zľava na <strong>celkovú cenu</strong> objednávky bude aplikovaná <strong>ak je celkové množstvo jednej ponuky v objednávke väčšie ako zadaná hodnota</strong>. Napríklad: Zľava je 5%, ak celkové množstvo ponuky "T-shirt size 52" je >= 3.',

        'offer_total_quantity_greater_discount_position'                         => 'Zľava na <strong>position price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong> if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_min_price'                        => 'Zľava na <strong>position with min price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong> if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_position_total_price'             => 'Zľava na <strong>total price of positions</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_shipping_price'                   => 'Zľava na <strong>shipping price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',
        'offer_total_quantity_greater_discount_total_price'                      => 'Zľava na <strong>order total price</strong> if the total quantity of offers in the order is greater than "XX"',
        'offer_total_quantity_greater_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>if the total quantity of offers in the order is greater than the set value</strong>. For example: Discount is 5%, if total quantity of offers "T-shirt size 52" (quantity = 2) + "T-shirt size 56" (quantity = 2) = 4 is >= 3.',

        'position_count_greater_discount_position'                         => 'Zľava na <strong>position price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_position_description'             => 'The discount on the price of the <strong>position</strong> will be applied <strong> if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_min_price'                        => 'Zľava na <strong>position with min price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_min_price_description'            => 'The discount on the price of the <strong>position with min price</strong> will be applied <strong> if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_position_total_price'             => 'Zľava na <strong>total price of positions</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_position_total_price_description' => 'The discount on the <strong>total price of positions</strong> list will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_shipping_price'                   => 'Zľava na <strong>shipping price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_shipping_price_description'       => 'The discount on the <strong>shipping price</strong> will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
        'position_count_greater_discount_total_price'                      => 'Zľava na <strong>order total price</strong> if the position count in the order is greater than "XX"',
        'position_count_greater_discount_total_price_description'          => 'The discount on the <strong>total price</strong> of order will be applied <strong>if the position count in the order is greater than the set value</strong>. For example: Discount is 5%, if position count is >= 3.',
    ],
];
