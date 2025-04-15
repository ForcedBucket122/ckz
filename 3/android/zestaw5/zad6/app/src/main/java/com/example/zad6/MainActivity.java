package com.example.zad6;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {
    TextView Kilometr;
    EditText Metr;
    Button licz;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        Kilometr = findViewById(R.id.km);
        Metr = findViewById(R.id.m);
        licz = findViewById(R.id.policz);

        licz.setOnClickListener(v -> {
            double metry = Double.parseDouble(String.valueOf(Metr.getText()));
            double wynik = metry*3.6;
            Kilometr.setText(String.valueOf(wynik));
        });
    }
}