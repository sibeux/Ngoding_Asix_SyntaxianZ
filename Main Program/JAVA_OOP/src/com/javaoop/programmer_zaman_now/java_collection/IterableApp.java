package com.javaoop.programmer_zaman_now.java_collection;

import java.util.List;

public class IterableApp {
    public static void main(String[] args) {

        Iterable<String> names = List.of("sibe","habqi","habi");

        for (var name : names) {
            System.out.println(name);
        }
    }
}