/// <reference types="jest" />
export declare function waitForDragDelay({ dragDelay, restoreDateMock, }?: {
    dragDelay?: number | undefined;
    restoreDateMock?: boolean | undefined;
}): jest.SpyInstance<number, [], any>;
export declare function clickMouse(element: HTMLElement, options?: {}): Event;
export declare function moveMouse(element: HTMLElement, options?: {}): Event;
export declare function releaseMouse(element: HTMLElement, options?: {}): Event;
export declare function touchStart(element: HTMLElement, options?: {}): Event;
export declare function touchMove(element: HTMLElement, options?: {}): Event;
export declare function touchRelease(element: HTMLElement, options?: {}): Event;
export declare function dragStart(element: HTMLElement, options?: {}): Event;
export declare function dragOver(element: HTMLElement, options?: {}): Event;
export declare function dragDrop(element: HTMLElement, options?: {}): Event;
export declare function dragStop(element: HTMLElement, options?: {}): Event;
export declare function getDataTransferStub(): {
    setData: jest.Mock<any, any, any>;
    effectAllowed: null;
};
//# sourceMappingURL=sensor.d.ts.map