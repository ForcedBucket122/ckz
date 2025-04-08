package com.example.zad2;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.RatingBar;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {
    private RatingBar rate1;
    private RatingBar rate2;
    private Button przycisk;
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
        rate1=findViewById(R.id.zdj1);
        rate2=findViewById(R.id.zdj2);
        przycisk=findViewById(R.id.wyslij);

        przycisk.setOnClickListener(v -> {
            Toast.makeText(this, "Oceniono pierwsze zdjecie na: " + rate1.getRating() + "\ngwiazdek i drugie na: " + rate2.getRating() + " gwiazdek", Toast.LENGTH_LONG).show();
        });
    }
}