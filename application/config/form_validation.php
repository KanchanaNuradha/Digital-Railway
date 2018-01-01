<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'user_put' => array(
        array('field' => 'first_name', 'label' => 'first_name', 'rules' => 'required|min_length[5]'),
        array('field' => 'password', 'label' => 'password', 'rules' => 'required|min_length[5]'),
        array('field' => 'email', 'label' => 'email', 'rules' => 'required|min_length[5]')
    ),
    'user_post' => array(
        array('field' => 'first_name', 'label' => 'first_name', 'rules' => 'required|min_length[5]'),
        array('field' => 'password', 'label' => 'password', 'rules' => 'required|min_length[5]'),
        array('field' => 'email', 'label' => 'email', 'rules' => 'required|min_length[5]')
    ),
    'proj_put' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required|min_length[5]'),
        array('field' => 'uid', 'label' => 'uid', 'rules' => 'required'),
        array('field' => 'description', 'label' => 'description'),
        array('field' => 'e_date', 'label' => 'e_date')
    ),
    'projInf_post' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required|min_length[5]'),
        array('field' => 'uid', 'label' => 'uid', 'rules' => 'required'),
        array('field' => 'description', 'label' => 'description'),
        array('field' => 'e_date', 'label' => 'e_date')
    ),
    'task_put' => array(
        array('field' => 'name', 'label' => 'name', 'rules' => 'required|min_length[5]'),
        array('field' => 'uid', 'label' => 'uid', 'rules' => 'required'),
        array('field' => 'description', 'label' => 'description'),
        array('field' => 'e_date', 'label' => 'e_date')
    ),
    'tmessage_put' => array(
        array('field' => 'message', 'label' => 'message', 'rules' => 'required|min_length[5]'),
        array('field' => 'uid', 'label' => 'uid', 'rules' => 'required'),
        array('field' => 'task', 'label' => 'task'),
        array('field' => 'date', 'label' => 'date')
    ),
    'save_countryzone' => array(
        array('field' => 'country', 'label' => 'Country Name ', 'rules' => 'required|min_length[5]'),
        array('field' => 'code', 'label' => 'Country Code', 'rules' => 'required|min_length[2]|max_length[2]'),
        array('field' => 'ipzone', 'label' => 'IP Zone', 'rules' => 'required|min_length[1]|max_length[1]')
    ),
    'save_rate' => array(
        array('field' => 'weight', 'label' => 'Weigit ', 'rules' => 'required|numeric'),
        array('field' => 'customer', 'label' => 'Customer', 'rules' => 'required|integer'),
        array('field' => 'type', 'label' => 'Rate Type ', 'rules' => 'required|integer'),
        array('field' => 'price_A', 'label' => 'Price A', 'rules' => 'required|numeric'),
        array('field' => 'price_B', 'label' => 'Price B', 'rules' => 'required|numeric'),
        array('field' => 'price_C', 'label' => 'Price C', 'rules' => 'required|numeric'),
        array('field' => 'price_D', 'label' => 'Price D', 'rules' => 'required|numeric'),
        array('field' => 'price_E', 'label' => 'Price E', 'rules' => 'required|numeric'),
        array('field' => 'price_F', 'label' => 'Price F', 'rules' => 'required|numeric'),
        array('field' => 'price_G', 'label' => 'Price G', 'rules' => 'required|numeric'),
        array('field' => 'price_H', 'label' => 'Price H', 'rules' => 'required|numeric'),
        array('field' => 'price_I', 'label' => 'Price I', 'rules' => 'required|numeric'),
        array('field' => 'price_J', 'label' => 'Price J', 'rules' => 'required|numeric'),
        array('field' => 'price_K', 'label' => 'Price K', 'rules' => 'required|numeric')
    ),
    'payment_put' => array(
        array('field' => 'amount', 'label' => 'Aamount', 'rules' => 'required'),
        array('field' => 'ref_number', 'label' => 'Rererance', 'rules' => 'required'),
        array('field' => 'name_cus', 'label' => 'Customer Name', 'rules' => 'required'),
        array('field' => 'company', 'label' => 'Company'),
        array('field' => 'address', 'label' => 'Address', 'rules' => 'required'),
        array('field' => 'postal_code', 'label' => 'Postal Code', 'rules' => 'required'),
        array('field' => 'city', 'label' => 'City', 'rules' => 'required'),
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required')
    ),
    'pickup_put' => array(
        array('field' => 'name_cus', 'label' => 'Customer Name', 'rules' => 'required'),
        array('field' => 'company', 'label' => 'Company'),
        array('field' => 'address', 'label' => 'Address'),
        array('field' => 'postal_code', 'label' => 'Postal_code'),
        array('field' => 'city', 'label' => 'City', 'rules' => 'required'),
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
        array('field' => 'message', 'label' => 'Message'),
        array('field' => 'ship_date', 'label' => 'Ship Date', 'rules' => 'required'),
        array('field' => 'redy_time', 'label' => 'Redy Time ', 'rules' => 'required'),
        array('field' => 'closing_time', 'label' => 'Closing Time', 'rules' => 'required')
    ),
    'document_put' => array(
        array('field' => 'airway_bill', 'label' => 'Airway Bill', 'rules' => 'required'),
        array('field' => 'image_1', 'label' => 'Image 1'),
        array('field' => 'image_2', 'label' => 'Image 2'),
        array('field' => 'image_3', 'label' => 'Image 3'),
        array('field' => 'image_4', 'label' => 'Image 4'),
        array('field' => 'image_5', 'label' => 'Image 5'),
        array('field' => 'image_6', 'label' => 'Image 6'),
        array('field' => 'email', 'label' => 'Email')
    ),
    'save_agent' => array(
        array('field' => 'contactName', 'label' => 'Contact Name', 'rules' => 'required'),
        array('field' => 'city', 'label' => 'City'),
        array('field' => 'phone', 'label' => 'Phone'),
        array('field' => 'email', 'label' => 'Email '),
        array('field' => 'type', 'label' => 'Type')
    ),
    'save_mail' => array(
        array('field' => 'sender_mail', 'label' => 'Sender mail', 'rules' => 'required'),
        array('field' => 'reciever-mail', 'Reciever mail' => 'City'),
    ),
    'save_branch' => array(
        array('field' => 'address_one', 'label' => 'Address one', 'rules' => 'required'),
        array('field' => 'address_two', 'label' => 'Address two'),
        array('field' => 'city', 'label' => 'City', 'rules' => 'required'),
        array('field' => 'langval', 'label' => 'Langval '),
        array('field' => 'longval', 'label' => 'Longval',),
        array('field' => 'postal_code', 'label' => 'Postal Code', 'rules' => 'required'),
        array('field' => 'title', 'label' => 'Title', 'rules' => 'required')
    ),
    'save_mail' => array(
        array('field' => 'sender_mail', 'label' => 'Sender mail', 'rules' => 'required'),
        array('field' => 'reciever-mail', 'Reciever mail' => 'City'),
    ),
    'save_services' => array(
        array('field' => 'service_title', 'label' => 'Service Title', 'rules' => 'required'),
        array('field' => 'content', 'label' => 'Content', 'rules' => 'required')
    ),
    'save_news' => array(
        array('field' => 'news_title', 'label' => 'Title', 'rules' => 'required'),
        array('field' => 'message', 'label' => 'Message', 'rules' => 'required')
    ),
    'save_job' => array(
        array('field' => 'job_title', 'label' => 'Job Title', 'rules' => 'required'),
        array('field' => 'category_name', 'label' => 'Job Category'),
        array('field' => 'location', 'label' => 'Location'),
        array('field' => 'details', 'label' => 'Details')
    ),
    'save_category' => array(
        array('field' => 'category_name', 'label' => 'Title', 'rules' => 'required')
    ),
    'save_site_user' => array(
        array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
        array('field' => 'telephone', 'label' => 'Phone', 'rules' => 'required'),
        array('field' => 'password', 'label' => 'Details', 'rules' => 'required')
    ),
    'cv_upload_user' => array(
        array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
        array('field' => 'telephone', 'label' => 'Phone', 'rules' => 'required')
    ),
    'save_location' => array(
        array('field' => 'location', 'label' => 'Location', 'rules' => 'required')
    ),
    'save_post_job' => array(
        array('field' => 'name', 'label' => 'First Name', 'rules' => 'required'),
        array('field' => 'email', 'label' => 'Email', 'rules' => 'required'),
        array('field' => 'phone', 'label' => 'Phone', 'rules' => 'required'),
        array('field' => 'company', 'label' => 'Company', 'rules' => 'required'),
        array('field' => 'job_description', 'label' => 'Job Description', 'rules' => 'required')
    )
);

