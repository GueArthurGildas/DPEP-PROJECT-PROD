declare function toHaveTriggeredSensorEvent(received: () => void, expectedEventName: string, count: number): {
    pass: boolean;
    message: () => string;
};
declare function toHaveCanceledSensorEvent(received: () => void, expectedEventName: string): {
    pass: boolean;
    message: () => string;
};
//# sourceMappingURL=sensor.d.ts.map