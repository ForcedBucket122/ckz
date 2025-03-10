package com.example.zad1;

import android.os.Bundle;
import android.os.CountDownTimer;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    private EditText timerText;
    private CountDownTimer countDownTimer;
    private static long START_TIME = 60000; // 1 minuta w milisekundach

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        timerText = findViewById(R.id.timer);
        Button startButton = findViewById(R.id.start);

        startButton.setOnClickListener(v -> startCountdown());
        Button stopButton = findViewById(R.id.stop);
        stopButton.setOnClickListener(v -> stopCountdown());
        Button resetButton = findViewById(R.id.reset);
        resetButton.setOnClickListener(v -> {
            stopCountdown();
            timerText.setText(String.valueOf(START_TIME / 1000));
        });


    }

    private void startCountdown() {
        if (countDownTimer != null) countDownTimer.cancel(); // Zatrzymuje poprzedni licznik
        START_TIME=Long.parseLong(timerText.getText().toString())*1000;
        countDownTimer = new CountDownTimer(START_TIME, 1000) {
            @Override
            public void onTick(long millisUntilFinished) {
                timerText.setText(String.valueOf(millisUntilFinished / 1000));
            }

            @Override
            public void onFinish() {
                timerText.setText("0");
            }
        }.start();
    }
    private void stopCountdown() {
        if (countDownTimer != null) countDownTimer.cancel();
    }
}
