package com.example.zad2api30;

import android.os.Bundle;
import android.view.View;
import android.widget.CheckBox;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

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
    }
    public void komunikat(View view){
        CheckBox opcja1 = findViewById(R.id.opcja1);
        CheckBox opcja2 = findViewById(R.id.opcja2);
        CheckBox opcja3 = findViewById(R.id.opcja3);
        CheckBox opcja4 = findViewById(R.id.opcja4);

        TextView wynik = findViewById(R.id.wynik);

        StringBuilder sb = new StringBuilder();
        if (opcja1.isChecked()) sb.append("Opcje 1 ");
        if (opcja2.isChecked()) sb.append("Opcje 2 ");
        if (opcja3.isChecked()) sb.append("Opcje 3 ");
        if (opcja4.isChecked()) sb.append("Opcje 4 ");
        wynik.setText("Wybrano: " +sb.toString());


    }
    public void czysc(View view){
        CheckBox opcja1 = findViewById(R.id.opcja1);
        CheckBox opcja2 = findViewById(R.id.opcja2);
        CheckBox opcja3 = findViewById(R.id.opcja3);
        CheckBox opcja4 = findViewById(R.id.opcja4);

        TextView wynik = findViewById(R.id.wynik);

        opcja1.setChecked(false);
        opcja2.setChecked(false);
        opcja3.setChecked(false);
        opcja4.setChecked(false);
        wynik.setText("");

    }
}