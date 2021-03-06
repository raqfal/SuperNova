<?php

/*
#############################################################################
#  Filename: fleet.mo
#  Project: SuperNova.WS
#  Website: http://www.supernova.ws
#  Description: Massive Multiplayer Online Browser Space Startegy Game
#
#  Copyright © 2009 Gorlum for Project "SuperNova.WS"
#  Copyright © 2009 MSW
#############################################################################
*/

/**
*
* @package language
* @system [Uzbekin]
* @version 37a9.11
*
*/

/**
* DO NOT CHANGE
*/

if (!defined('INSIDE')) die();


$lang = array_merge($lang, array(
  'flt_page2_title' => 'Vazifani tanlash',
  'fl_title' => 'Flotlar',
  'fl_expttl' => 'Ekspeditsiyalar',
  'fl_mission' => 'Vazifa',
  'fl_count' => 'Soni',
  'fl_count_short' => 'Soni',
  'fl_from' => 'Qayerdan',
  'fl_from_t' => 'Qaytish',
  'fl_start_t' => 'Vaqt',
  'fl_dest' => 'Qayerga',
  'fl_dest_t' => 'Yetib kelish',
  'fl_back_t' => 'Qaytish',
  'fl_back_in' => 'Qoldi',
  'fl_order' => 'Buyruq',
  'fl_get_to' => '(Т)',
  'fl_get_to_ttl' => 'Shu yoqqa',
  'fl_back_to' => '(О)',
  'fl_back_to_ttl' => 'Orqaga',
  'fl_associate' => 'Harbiy ittifoq',
  'fl_noslotfree' => 'Flotlarga hech kim buyruq bera olmaydi!',
  'fl_notback' => 'Flot qayta olmaydi!',
  'fl_onlyyours' => 'Siz faqat ozingizning flotingizni qaytarishingiz mumkin!',
  'fl_isback' => 'Flot qaytmoqda',
  'fl_sback' => 'Orqaga',
  'fl_error' => 'Hatolik',
  'fl_new_miss' => 'Yangi vazifa: Kemalarni tanlash',
  'fl_fleet_typ' => 'Kema turi',
  'fl_fleet_disp' => 'Soni',
  'fl_noplanetrow' => 'Sistemada hatolik yuz berdi! ))',
  'fl_fleetspeed' => 'Tezlik: ',
  'fl_selmax' => 'eng yuqorisi.',
  'fl_sur' => 'dan',
  'fl_continue' => 'Davom ettirish',
  'fl_noships' => 'Sayyora orbitadasida kemalar yo`q',
  'fl_unselectall' => 'Yangilash',
  'fl_selectall' => 'Barch kemalar',
  'fl_orbiting' => 'Orbitada',
  'fl_to_fly' => 'Jonatish',
  'fl_no_flying_fleets' => 'Parvoz qilayotgan flotlar yo`q',
  'fl_floten1_ttl' => 'Joyni tanlash',
  'fl_noenought' => 'Kemalar yetishmayapdi!',
  'fl_speed' => 'Tezlik',
  'fl_planet' => 'Sayyora',
  'fl_ruins' => 'Siniqlar toplami',
  'fl_moon' => 'Oy',
  'fl_dist' => 'Masofa',
  'fl_fltime' => 'Davomiylik(bir taraflama)',
  'fl_time_go' => 'Jonadi (vaqt)',
  'fl_time_back' => 'Qaytadi (vaqt)',
  'fl_deute_need' => 'Yoqilgi sarfi',
  'fl_speed_max' => 'Yuqori tezlik',
  'fl_shortcut' => 'Garov hati',
  'fl_shortlnk' => 'Garov hatini tahrirlash',
  'fl_shrtcup1' => '(P)',
  'fl_shrtcup2' => '(O)',
  'fl_shrtcup3' => '(L)',
  'fl_planettype1' => 'Sayyora',
  'fl_planettype2' => 'Siniqlar to`plami',
  'fl_planettype3' => 'Oy',
  'fl_myplanets' => 'Sayyoralar',
  'fl_nocolonies' => 'sayyora yo`q',
  'fl_noacss' => 'Harbiy ittifoqda takliflar yo`q',
  'fl_grattack' => 'Harbiy ittifoqlar',
  'fl_allressources' => 'Barcha resurslar',
  'fl_space_left' => 'Tryum joyi',
  'fl_attack_error' => array(
    ATTACK_ALLOWED => 'Flot muvaffaqiyatli jo`natildi',
    ATTACK_NO_TARGET => 'Korsatilgan joy mavjud emas',
    ATTACK_OWN => 'Ozingizning sayyorangizga hujum qilish mumkin emas',
    ATTACK_WRONG_MISSION => 'Belgilangan joy bo`yicha bu vazifani bajarish mumkin emas',
    ATTACK_NO_ALLY_DEPOSIT => 'Sayyorada Ittifoqdoshlar ombori mavjud emas',
    ATTACK_NO_DEBRIS => 'Siniqlar to`plami mavjud emas',
    ATTACK_VACATION => 'Tatilga chiqqan o`yinchiga hujum qilish mumkin emas',
    ATTACK_SAME_IP => 'BIR FOYDALANUVCHI BIR NECHTA O`YINCHI YARATISHDAN HIMOYA!<br>Ikki o`yinchi bir IP dan foydalanishi taqiqlanadi',
    ATTACK_BUFFING => 'Kuchsiz o`yinchidan kuchli o`yinchiga resurslarni tashish qoida bo`yicha taqiqlanadi',
    ATTACK_ADMIN => 'Siz Adminstratorga hujum qila olmaysiz',
    ATTACK_NOOB => 'Bu o`yinchi siz uchun o`ta kuchsiz',
    ATTACK_OWN_VACATION => 'Siz ahir tatildasizku',
    ATTACK_NO_SILO => 'Raketalar shaxtasida o`ta past daraja',
    ATTACK_NO_MISSILE => 'Raketalarsiz paketalar hujumini boshlah mumkin emas',
    ATTACK_NO_FLEET => 'Vazifa uchun bo`sh flotni jo`natish mumkin emas',
    ATTACK_NO_SLOTS => 'Flotga buyruq berishga hech kim yo`q',
    ATTACK_NO_SHIPS => 'Bildirilgan o`lchamdagi resurslarni tashish uchun Harbiy tehnika yetishmaydi',
    ATTACK_NO_RECYCLERS => 'Qayta ishlovchi kemalarsiz siniqlarni yig`a olmaysiz',
    ATTACK_NO_SPIES => 'Josuslar zondisiz boshqa sayyoraga josus jo`nata olmaysiz',
    ATTACK_NO_COLONIZER => 'Ko`paytirish kemalarisiz boshqa sayyoraga ko`cha olmaysiz',
    ATTACK_MISSILE_TOO_FAR => 'Raketalarni buncha uzoqqa jo`nata olmaysiz',
    ATTACK_WRONG_STRUCTURE => 'Raketalar bilan faqat himayalanuvchi qurollarga hujum qilish mumkin',
    ATTACK_NO_FUEL => 'Flot havoga kotarilishi uchun yoqilg`i yetishmadi',
    ATTACK_NO_RESOURCES => 'Jo`natma uchun siz korsatgan hajmdagi resurslar yo`q',
    ATTACK_NO_ACS => 'Ko`rsatilgan guruh CAB mavjud emas',
    ATTACK_ACS_MISSTARGET => 'CAB guruhi belgilagan joy yoki nishon sizniki bilan to`gri kelmayapdi',
    ATTACK_WRONG_SPEED => 'Tezlik noto`gri belgilangan',
    ATTACK_ACS_TOO_LATE => 'Flot o`ta sekin harakatlanmoqda, CAB guruhini quvib yeta olmasligi mumkin',
    ATTACK_BASHING => 'Qarorgoh Himoyasi. Bir sayyoraga bir kun ichida ruhsat etilgan miqdordagina hujum qilish mumkin',
    ATTACK_BASHING_WAR_DELAY => 'Qarorgoh Himoyasi. Bu Ittifoq bilan urush elon qilinib bo`lindi, lekin hali urush boshlanmadi. Urush qaysi vaqtga belgilanganini sizning Ittifoqdoshingiz ma`lumotnomasidan bilib oling',
    ATTACK_ACS_WRONG_TARGET => 'CAB guruhi belgilagan joy yoki nishon sizniki bilan togri kelmayapdi',
    ATTACK_SAME => 'Bu sayyora flot bormoqchi bo`lgan joy bilan to`g`ri kelmoqda',
    ATTACK_RESOURCE_FORBIDDEN => 'Resurslar ortilgan flotni bu vazifa uchun jo`natib bo`lmaydi',
    ATTACK_TRANSPORT_EMPTY => 'Flotni transport vazifasi uchun resurslarsiz jo`natib bolmaydi',
    ATTACK_SPIES_LONLY => 'Bu vazifa uchun faqat josuslar zondidagi flotni birgina o`zini yuborib bo`lmaydi',
    ATTACK_TOO_FAR => 'Ваш флот не может лететь так далеко',
    ATTACK_OVERLOADED => 'Ваши корабли перегружены. Уменьшите загрузку трюмов или добавьте транспортных кораблей',
  ),

  'fl_fleet_err' => 'Hatolik!',
  'fl_unknow_target' => '<li>Siz ko`rsatgan joy mavjud emas!</li>',
  'fl_nodebris' => '<li>Asteroidlar joyi mavjud emas!</li>',
  'fl_nomoon' => '<li>Oy mavjud emas!</li>',
  'fl_vacation_ttl' => 'Ta`tildagi rejim',
  'fl_vacation_pla' => 'O`yinchi ta\'tilga chiqqan!',
  'fl_noob_title' => 'Yangi o`yinchilarni himoyalash',
  'fl_noob_mess_n' => 'Bu o`yinchi yangilar himoyasida!',
  'fl_bad_planet01' => '<li>Sayyorada hayot mavjud!</li>',
  'fl_colonized' => '<li>Bu sayyoraga oldin ko`chib o`tkazilgan!</li>',
  'fl_dont_stay_here' => 'Dushmanning sayyorasiga qo`nishingiz mumkin emas!',
  'fl_no_allydeposit' => 'Sayyorada Ittifoqdosh ombori mavjud emas!',
  'fl_no_self_attack' => '<li>O`zingizning sayyorangizga hujum qilish mumkin emas!</li>',
  'fl_no_self_spy' => '<li>O`zingizning sayyorangizga josus jo`natish mumkin emas!</li>',
  'fl_only_stay_at_home' => '<li>Begona sayyoraga flotni jo`natish mumkin emas!</li>',
  'fl_cheat_speed' => 'O`yinchi hatosi! Hat Adminstratorga yuborildi!',
  'fl_cheat_origine' => 'O`yinchi hatosi! Hat Adminstratorga yuborildi!',
  'fl_limit_planet' => '<li>Noto`g`ri sayyora !</li>',
  'fl_limit_system' => '<li>Noto`g`ri sistema !</li>',
  'fl_limit_galaxy' => '<li>Noto`g`ri gallaktika !</li>',
  'fl_ownpl_err' => '<li>O`zingizning sayyorangizga hujum qilish mumkin emas!</li>',
  'fl_no_planet_type' => '<li>Joy noto`g`ri belgilandi!</li>',
  'fl_fleet_err_pl' => '<li>Sayyorada belgilangan joyda hatolik!</li>',
  'fl_bad_mission' => '<li>Vazifa buyurilmadi yoki bajarib bo`lmaydigan vazifa buyurildi!</li>',
  'fl_no_fleetarray' => '<li>Flotga g`alatiroq nimadir boldi!</li>',
  'fl_noenoughtgoods' => '<li>&quot;Transport&quot;vazifasi uchun bosh flotni jo`natishga urinish!</li>',
  'fl_expe_notech' => '<li>Ekspeditsiyaga yuborish uchun oldin Ekspeditsiya tehnologiyasini tadqiq etish kerak!</li>',
  'fl_expe_max' => '<li>Siz yana bitta ekspeditsiya guruhini jo`nata olmaysiz. Ekspeditsiya tehnologiyasini keyingi darajaga kotaring.</li>',
  'fl_no_deuterium' => 'Tryumlarni yuklash va parvoz qilish uchun yoqilgi yetishmayapdi. Yetishmayotgan hajm: ',
  'fl_no_resources' => 'Tryumlarni yuklash uchun resurslar yetishmayapdi',
  'fl_nostoragespa' => 'Resusrlarni tashish uchun tryumda joy yetishmayapdi! Yetishmayotgan hajm: ',
  'fl_fleet_send' => 'Flot jo`natildi',
  'fl_expe_warning' => 'Diqqat, ekspeditsiya vaqtida kemalaringizdan ayrilishingiz ham mumkin!',
  'fl_expe_staytime' => 'ushlab turish vaqti',
  'fl_expe_hours' => 'soat',
  'fl_adm_attak' => 'Siz Adminstratorga hujum qila olmaysiz',
  'fl_warning' => 'Ogohlantirish',
  'fl_page0_hint' => '<ul><li> Garov hatini yaratish, uni tahrirlash va o`chirish uchun chap tarafdagi menyudan &quot;Hatchop&quot; bo`limiga o`ting.<li>Biror Harbiy Ittifoqqa a`zo bo`lish uchun siz uchun ochiq bolgan istagan ittifoq nomiga bosishingiz mumkin</ul>',
  'fl_page1_hint' => '<ul><li>Uchish davomiyligi ko`tarilishdagi vaqt/ uchishdagi vaqt va qo`nishdagi vaqtni o`z ichiga oladi<li>Garov hatini yaratish, uni tahrirlash va o`chirish uchun chap tarafdagi menyudan &quot;Hatchop&quot; bo`limiga o`ting.<li>Biror Harbiy Ittifoqqa a`zo bolish uchun siz uchun ochiq bo`lgan istagan ittifoq nomiga bosishingiz mumkin</ul>',
  'fl_page5_hint' => '<ul>  <li>Bu sayyoradan chiqish uchun resurslarga o`hshash qatordagi belgilarni olib qoying <li>Bu belgini tanlash aynan shu resursni belgilangan qo`shimcha sayyoralaringizga yuborish yoki qoldirish ikmonini beradi.<li>Barcha degan belgini tanlash barcha resursni belgilangan qo`shimcha sayyoralaringizga yuborish yoki qoldirish imkonini beradi. <li>Resurslarni tashishda faqat Kichik transport, Katta transport va Supertransportlar dan foydalanishingizga ruxsat etilgan<li>Kemalar tryum soniga qarab tahlab yuklashadi</ul>',
  'fl_err_no_ships' => 'Flotda bir dona ham kema yo`q. Oldingi sahifaga qayting va Flotni jo`natish uchun kemalarni tanlang',
  'fl_shrtcup' => array(
    PT_PLANET => '(S)',
    PT_DEBRIS => '(S)',
    PT_MOON => '(OY)',
  ),

  'fl_planettype' => array(
    PT_PLANET => 'Sayyora',
    PT_DEBRIS => 'Siniq parchalari',
    PT_MOON => 'OY',
  ),

  'fl_aks_invite_message_header' => 'CAB ga taklif',
  'fl_aks_invite_message' => '<font color="red">%s O`yinchi sizni CAB ga qo`shilishingizni taklif qildi. Siz CAB ga qo`shilish uchun sahifadagi &quot;Flot&quot; bo`limini tanlang.</font>',
  'fl_aks_player_invited' => '<font color="lime">%s o`yinchi yoppasiga hujumda qatnashishingizni taklif qilmoqda.</font>',
  'fl_aks_player_invited_already' => '<font color="lime">%s o`yinchi taklif qilib bo`lindi. Qayta taklif bekor qilindi.</font>',
  'fl_aks_player_error' => '<font color="red">Hatolik. %s o`yinchi topilmadi.</font>',
  'fl_aks_already_in_aks' => 'Flot harbiy guruhga qo`shilib bo`ldi!',
  'fl_aks_adding_error' => '%s flotiga qo`shimcha o`yinchini qo`shishda hatolik yuz berdi',
  'fl_aks_hack_wrong_fleet' => 'Vzlomga harakat! Begona flot harakati! Adminstratorga hat yuborildi',
  'fl_aks_too_slow' => 'Flot o`ta sekin harakatlanmoqda, shuning uchun Harbiy Ittifoqqa qo`shila olmaydi',
  'fl_fleet_not_exists' => 'Ko`rsatilgan flot topilmadi',
  'fl_multi_ip_protection' => 'BIR FOYDALANUVCHI BIR NECHTA O`YINCHI YARATISHDAN HIMOYA!<br>Bir IP dagi boshqa o`yinchiga resurslar jo`natish taqiqlanadi!',
  'fl_load_cargo' => 'Tryumda',
  'fl_rest_on_planet' => 'Qoldiq',
  'fl_none_resources' => 'Tashlab yuborish',
  'fl_planet_resources' => 'Sayyoradagi resurslar',
  'fl_fleet_data' => 'Flotning hozirgi holati',
  'flt_gather_report' => 'Bajarilganlik haqida hisobot',
  'flt_report' => 'Hisobot',
  'flt_no_transports' => 'transport yo`q',
  'flt_no_fuel' => 'yoqilg`i yo`q',
  'fl_id' => '№',
  'fl_ressources' => 'Hom ashyo',

  'fl_fuel_on_planet' => 'Sayyoradagi zahiraga olingan yoqilg`i',

  'flt_aks_players_in_aks' => 'CAB dagi o`yinchilar',
  'flt_aks_player_invite' => 'CAB ga o`yinchilarni taklif qilish',
  'flt_aks_player_invite_do' => 'Taklif qilish',
  'flt_aks_player_same' => 'Hujum qilgan o`yinchi CAB ga qo`shilishi mumkin emas!',
  'flt_aks_error_too_much_players' => 'CAB ga 5 o`yinchidan ortiq o`yinchi taklif qilish mumkin emas',
));

?>
