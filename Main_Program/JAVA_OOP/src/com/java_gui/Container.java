package com.java_gui;

import java.awt.Color;

import javax.swing.ButtonGroup;
import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JRadioButton;
import javax.swing.JTextField;
import javax.swing.SwingConstants;

public class Container {
    public static void main(String[] args) {

        JFrame frame = new JFrame("This is title"); // membuat frame baru
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE); // mengatur default close operation

        frame.setResizable(true); // mengatur frame dapat di-resize
        frame.setSize(420, 420); // mengatur ukuran frame
        frame.setLocationRelativeTo(null); // mengatur frame berada di tengah layar
        frame.setLayout(null);

        ImageIcon image = new ImageIcon(
        "G:\\.shortcut-targets-by-id\\1GLhesaekxPRKr-lkNYX-mtfouqJhqhXN\\SIBEUX\\KULIAH\\__UNEJ__\\Algorithm_Programming\\PEMROGRAMAN\\Main_Program\\Web Programming\\.college\\project-akhir\\img\\logs.png");
        frame.setIconImage(image.getImage()); // mengatur icon frame

        // mengatur warna background ==============
        frame.getContentPane().setBackground(new Color(0, 255, 0)); // mengatur background frame
        frame.getContentPane().setBackground(new Color(0x123)); // mengatur background frame
        frame.getContentPane().setBackground(Color.cyan); // mengatur background frame
        // ========================================

        // bagian component ==========================
        JLabel judulLabel = new JLabel("Ini Adalah Aplikasi RankerIN", SwingConstants.CENTER); // membuat label baru
        judulLabel.setBounds(100, 30,210, 30); // mengatur ukuran label
        frame.add(judulLabel); // menambahkan label ke frame
        // ========================================

        // menambahkan field ke frame ===============
        // bagian kode buku
        JLabel textKodeBuku = new JLabel("Kode Buku");
        textKodeBuku.setBounds(20, 80, 150, 30);
        frame.add(textKodeBuku);
        JTextField fieldKodeBuku = new JTextField(); // membuat text field baru
        fieldKodeBuku.setBounds(150, 80, 150, 30);
        frame.add(fieldKodeBuku); // menambahkan text field ke frame

        // bagian nama buku
        JLabel textNamaBuku = new JLabel("Nama Buku");
        textNamaBuku.setBounds(20, 120, 150, 30);
        frame.add(textNamaBuku);
        JTextField fieldNamaBuku = new JTextField(); // membuat text field baru
        fieldNamaBuku.setBounds(150, 120, 150, 30);
        frame.add(fieldNamaBuku); // menambahkan text field ke frame

        // bagian membership
        JLabel textMembership = new JLabel("Membership");
        textMembership.setBounds(20, 160, 150, 30);
        frame.add(textMembership);
        JRadioButton msEksklusif = new JRadioButton(); // membuat radio button baru
        msEksklusif.setText("Eksklusif"); // mengatur teks radio button
        msEksklusif.setBounds(150, 160, 80, 30); // mengatur ukuran radio button
        frame.add(msEksklusif); // menambahkan radio button ke frame

        JRadioButton msUmum = new JRadioButton(); // membuat radio button baru
        msUmum.setText("Umum"); // mengatur teks radio button
        msUmum.setBounds(230, 160, 70, 30); // mengatur ukuran radio button
        frame.add(msUmum); // menambahkan radio button ke frame

        ButtonGroup buttonMembership = new ButtonGroup(); // membuat button group baru
        buttonMembership.add(msEksklusif); // menambahkan radio button ke button group
        buttonMembership.add(msUmum); // menambahkan radio button ke button group

        // bagian biaya per hari
        JLabel textBiaya = new JLabel("Biaya per hari");
        textBiaya.setBounds(20, 200, 150, 30);
        frame.add(textBiaya);
        JTextField fieldBiaya = new JTextField(); // membuat text field baru
        fieldBiaya.setBounds(150, 200, 150, 30);
        frame.add(fieldBiaya); // menambahkan text field ke frame


        // set visible ini harus ditaruh paling belakang
        // agar saat dijalankan, frame akan terlihat secara otomatis
        frame.setVisible(true); // mengatur frame terlihat atau tidak
    }
}
