package com.java_gui;

import java.awt.Color;

import javax.swing.ImageIcon;
import javax.swing.JFrame;
import javax.swing.JLabel;
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
        frame.setVisible(true); // mengatur frame terlihat atau tidak

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
        JLabel textKodeBuku = new JLabel("Kode Buku");
        textKodeBuku.setBounds(20, 80, 150, 30);
        frame.add(textKodeBuku);

        JTextField fieldKodeBuku = new JTextField(); // membuat text field baru
        fieldKodeBuku.setBounds(150, 80, 150, 30);
        frame.add(fieldKodeBuku); // menambahkan text field ke frame

        JLabel textNamaBuku = new JLabel("Nama Buku");
        textNamaBuku.setBounds(20, 120, 150, 30);
        frame.add(textNamaBuku);

        JTextField fieldNamaBuku = new JTextField(); // membuat text field baru
        fieldNamaBuku.setBounds(150, 120, 150, 30);
        frame.add(fieldNamaBuku); // menambahkan text field ke frame
    }
}
