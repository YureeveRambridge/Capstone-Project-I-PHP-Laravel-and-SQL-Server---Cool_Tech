<?php

    // Function removes dashes from the tag slug and returns a presentable category for user to read
    function tagName($slug){
        if ($slug === 'ai') {
            return 'Artificial intelligence';
        } else if ($slug === 'google') {
            return 'Google';
        } else if ($slug === 'high-performance-computing') {
            return 'High performance computing';
        } else if ($slug === 'singularity') {
            return 'Singularity';
        } else if ($slug === 'coding-101') {
            return 'Coding 101';
        } else {
            return 'Unknown tag';
        }
    }

    // Function removes dashes from the category slug and returns a presentable category for user to read
    function categoryName($slug){
        if ($slug === 'hardware-reviews') {
            return 'Hardware reviews';
        } else if ($slug === 'opinion-pieces') {
            return 'Opinion pieces';
        } else if ($slug === 'software-reviews') {
            return 'Software reviews';
        } else if ($slug === 'tech-news') {
            return 'Tech news';
        } else if ($slug === 'learning-resources') {
            return 'Learning resources';
        } else {
            return 'Unknown category';
        }
    }
