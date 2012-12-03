<?php

namespace Faker\Provider\ua_UA;

class Person extends \Faker\Provider\Person
{
    protected static $formats = array(
        '{{firstName}} {{middleName}} {{lastName}}',
        '{{lastName}} {{firstName}} {{middleName}}',
    );

    protected static $firstName = array(
        'Олександр', 'Олексій', 'Дмитро', 'Сергій', 'Андрій', 'Антон',
        'Віталий', 'Володимир', 'Денис', 'Євген', 'Іван', 'Ігор',
        'Костянтин', 'Максим', 'Михайло', 'Миколай', 'Роман', 'Анатолій',
        'Аркадій', 'Арсеній', 'Богдан', 'Болеслав', 'Борис',
        'Вадим', 'Валентин', 'Валерій', 'Василь', 'Віктор',
        'Владислав', 'Всеволод', 'В\'ячеслав', 'Генадій', 'Георгій', 'Григорій',
        'Давид', 'Дан', 'Данил', 'Данило', 'Єгор', 'Єфим',
        'Захар', 'Илля', 'Йосиф', 'Кирило', 'Лаврентій', 'Лев', 'Леонід', 'Макар',
        'Марк', 'Мирослав', 'Назар', 'Микита', 'Олег', 'Петро', 'Платон',
        'Ростислав', 'Руслан', 'Савва', 'Сава', 'Святослав', 'Семен', 'Степан',
        'Тарас', 'Тимофій', 'Федір', 'Фелікс', 'Юлій', 'Юрій', 'Ян', 'Ярослав',
    );

    protected static $middleName = array(
        'Олександрович', 'Олексійович', 'Андрійович', 'Євгенович',
        'Сергійович', 'Іванович', 'Федорович', 'Тарасович', 'Васильович', 'Романович'
    );

    protected static $lastName = array(
        'Антоненко',
        'Василенко',
        'Васильчук',
        'Васильєв',
        'Гнатюк',
        'Дмитренко',
        'Захарчук',
        'Іванченко',
        'Микитюк',
        'Павлюк',
        'Панасюк',
        'Петренко',
        'Романченко',
        'Сергієнко',
        'Середа',
        'Таращук',
        'Боднаренко',
        'Броваренко',
        'Броварчук',
        'Кравченко',
        'Кравчук',
        'Крамаренко',
        'Крамарчук',
        'Мельниченко',
        'Мірошниченко',
        'Шевченко',
        'Шевчук',
        'Шинкаренко',
        'Пономаренко',
        'Пономарчук',
    );

    /**
     * Return middle name
     * @example 'Іванович'
     * @access public
     * @return string Middle name
     */
    public function middleName()
    {
        return static::randomElement(static::$middleName);
    }
}
